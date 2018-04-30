<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmMail;
use App\Mail\InviteInterview;
use App\Mail\PasswordReset;
use Illuminate\Http\Request;
use App\Mail\ShowInterest;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    #sending email to the school
    public function sendMail($email)
    {

        Mail::to($email)->send(new ShowInterest());

        return view('mail/mails');
    }

    public function interviewInvitation($email)
    {
        Mail::to($email)->send(new InviteInterview());
    }
}
