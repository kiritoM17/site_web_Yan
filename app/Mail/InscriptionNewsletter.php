<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SignNewsLetter extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Elements de demande
     * @var array
     */
    public $internaute;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $infos)
    {
        $this->internaute = $infos;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@sonographyservicesyaounde.com')->view('emails.ask-newsletter');

    }
}