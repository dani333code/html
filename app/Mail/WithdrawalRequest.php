<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WithdrawalRequest extends Mailable
{

use Queueable, SerializesModels;

public $user_name;
public $amount;

/**
 * Create a new message instance.
 *
 * @return void
 */
public function __construct($user_name, $amount)
{
    $this->user_name = $user_name;
    $this->amount = $amount;

}

/**
 * Build the message.
 *
 * @return $this
 */
public function build()
{
    return $this->view('emails.withdrawal_request');
}


}


