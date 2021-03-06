<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\TestsEnrollmentController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin', [HomeController::class, 'private']);

// Route::get('/email', function(){
//     Mail::to('areeb@example.com')->send(new WelcomeMail());
//     return new WelcomeMail();
// });

Route::get('/email', [EmailController::class, 'email']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/send-test-enrollment',[TestsEnrollmentController::class, 'sendTestNotification']);

// Route::get('/sms',[SmsController::class, 'index']);

Route::resource('/user_mail', ContactController::class);