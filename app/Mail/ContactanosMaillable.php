<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMaillable extends Mailable
{
    use Queueable, SerializesModels;

    public $contacto; 
    public $subject;
    public $from;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //RECIVIENDO PARAMETROS
        $this->from($contacto['correo']);
        $this->contacto = $contacto;
        $this->subject = $contacto['asunto'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this->view('correo.contactanos');
    }
}
