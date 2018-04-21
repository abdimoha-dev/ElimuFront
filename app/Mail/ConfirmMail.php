<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address='teachfront@sahan.co.ke';
        $name = 'TeachFront admin';
        $subject = 'Email Confirmation';

        return $this->view('mail.confirmation', ['token' => $this->token])
            ->from($address, $name)
            ->subject($subject);
    }
}
