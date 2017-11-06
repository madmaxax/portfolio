<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $mail, $nachricht;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $mail, $nachricht)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->nachricht = $nachricht;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('maximilian.muza@gmx.de')
            ->subject('Kontakt Anfrage')
            ->view('emails.mymail');
    }
}
