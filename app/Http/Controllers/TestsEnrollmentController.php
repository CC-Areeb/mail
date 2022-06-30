<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\TestEnrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class TestsEnrollmentController extends Controller
{
    public function sendTestNotification()
    {

        $user = User::first();


        $enrollmentData = [
            'body' => 'You received a notification',
            'enrollmentText' => 'You can enroll',
            'url' => url('/'),
            'Thanks' => 'You have 2 weeks to enroll 😃',
        ];


        // $user->notify(new TestEnrollment($enrollmentData));
        Notification::send($user, new TestEnrollment($enrollmentData));
    }
}
