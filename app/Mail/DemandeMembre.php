<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DemandeMembre extends Mailable
{
    use Queueable, SerializesModels;

   /**
 * Elements de demande
 * @var array
 */
 public $contact;
 /**
 * Create a new message instance.
 *
 * @return void
 */
 public function __construct(Array $infos)
 {
 $this->contact = $infos;
 }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      
        return $this->from('mvemvearnoldjunior@gamil.com')->view('emails.demande-membre',compact('contact'))->subject('Contact Us By');
      
            
    }
}
