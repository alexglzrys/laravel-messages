<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Sichikawa\LaravelSendgridDriver\SendGrid;

class MessageReceived extends Mailable
{
    // SendGrid es un servicio de envío de correo electrónico masivo, que contiene planes flexibles y gratuitos para enviar mails desde nuestras aplicaciones. Solo basta con descargar e instalar la librería "Laravel SendGrid Driver", colocar las credenciales otorgadas por SendGrid (crear API Key), e importar y usar el trait SendGrid en nuestros Mailables, para poder enviar mails desde nuestras aplicaciones Laravel
    //
    // Mailtrap: se recomienda durante el desarrollo.
    // SendGrid: es en producción.
    use Queueable, SerializesModels, SendGrid;

    public $name = "LaravelMessages";
    // Propiedad que almacenará el asunto del email
    public $subject = "Confirmación de contacto";
    // Propiedad que almacenará todo el contenido dinámico a enviar en el email
    // (tiene que ser publica para enviarla a la vista)
    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content)
    {
        // La información pasada al mailable es organizada a manera de array asociativo, si no se indica al tipo de clase que pertenece. (Message, Order, etc.)
        // Por tanto, es importante acceder a ella como tal desde la vista $content['llave']
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Retornar una vista que figurará como el contenido del mail
        // Implicitamente se envía el contenido publico como variable de la vista
        return $this->from('info@laravelmessages.dev',  $this->name)
                    ->cc('alexglzrys@gmail.com', $this->name)
                    ->view('mails.message-received');
    }
}
