<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KursInfoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $mail, $subscription;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $mail, $subscription)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->subscription = $subscription;
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
