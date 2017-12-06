<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KursInfoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $mail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $mail)
    {
        $this->name = $name;
        $this->mail = $mail;
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
