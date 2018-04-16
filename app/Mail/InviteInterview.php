<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InviteInterview extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        $address = auth()->user()->email;
        $address='abdi.mohammed@sahan.co.ke';
        $name = auth()->user()->first_name;
        $subject = 'Interview Invitation';

        return $this->view('mail.interview')
            ->from($address, $name)
            ->subject($subject);
    }
}
