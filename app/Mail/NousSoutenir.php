<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NousSoutenir extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contact;
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
        return $this->from('lesjaddes10@gmail.com')->view('emails.nous-soutenir')->subject('Soutenir Jadd Cameroon');
        //return $this->view('view.name');
    }
}
