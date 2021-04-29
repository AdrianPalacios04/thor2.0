<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnvioCorreoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subjet = "Información de contactos";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //remitente = nombre de thor
         
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // traer una vista y contenido de correo electronico 
        return $this->view('emails.envio');
    }
}