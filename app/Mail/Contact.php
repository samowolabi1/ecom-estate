<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    public $conmessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($conmessage)
    {
        $this->conmessage = $conmessage;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.message')
                        ->subject('Cryptolaw Message');
    }
}
