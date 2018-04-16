<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShowInterest extends Mailable
{
    use Queueable, SerializesModels;

    public $total;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'teachfront@sahan.co.ke';
        $name = 'Abdi';
        $subject = 'One Interest Shown';

        return $this->view('mail.mails')
            ->from($address, $name)
            ->subject($subject);


    }
}
