<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Ofertas extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Hola Fulano')
                    ->line('Esto es el primer párrafo')
                    ->action('Botón', url('/'))
                    ->line('Parte final del correo electrónico');
    }

    public function toArray($notifiable)
    {
        return [
          'message' => 'Esto es el contenido de mi notificación',
          'conteo' => 'Esto es el contenido de mi notificación',
        ];
    }
}
