<?php

namespace App\Http\Controllers;

use App\Mail\InviteInterview;
use Illuminate\Http\Request;
use App\Mail\ShowInterest;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    #sending email confirmation to the school
    public function sendMail($email)
    {

        Mail::to($email)->send(new ShowInterest());

        return view('mail/mails');
    }
    public function interviewInvitation($email){
        Mail::to($email)->send(new InviteInterview());
    }
}
