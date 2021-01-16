<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $problem;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $problem)
    {
        $this->name = $name;
        $this->email = $email;
        $this->problem = $problem;
    }
        //


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact');
    }
}
