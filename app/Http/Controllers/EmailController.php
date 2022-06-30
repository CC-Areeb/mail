<?php

namespace App\Http\Controllers;

use App\Mail\AttachmentMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function email()
    {
        // return new AttachmentMail();
        Mail::to('someone@example.com')->send(new AttachmentMail());
    }
}
