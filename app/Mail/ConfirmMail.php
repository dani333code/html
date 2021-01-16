<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class ConfirmMail extends Mailable
{
    use Queueable, SerializesModels;


    public $deposit_details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($deposit_details)
    {
        $this->deposit_details = $deposit_details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.confirm-mail');
    }
}
