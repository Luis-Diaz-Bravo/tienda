<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrdenEnviada extends Mailable
{
  use Queueable, SerializesModels;

  public $mensaje;

  public function __construct($mensaje)
  {
    $this->mensaje = $mensaje;
  }

  public function build()
  {
    return $this->view('email.orden_enviada');
  }
}
