<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    // public $email;
    // public function __construct($data)
    // {
    //     //
    //     $this->email = $email;
    // }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->from($email)
                    ->view('email.email');
    }
}
