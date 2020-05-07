<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Suscriber extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $infos)
    {
        //
        $this->contact = $infos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
     public function build()
     {
        return $this->from('mvemvearnoldjunior@gmail.com')
        ->view('emails.nous-contacter')
        ->subject('AMAFOR SUSCRIBTION-'.$this->contact['email_con']);
     }
}
