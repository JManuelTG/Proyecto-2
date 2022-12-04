<?php

namespace App\Mail;

use App\Models\Servicio;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificaOrdenCreada extends Mailable
{
    use Queueable, SerializesModels;

    public $servicio;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Servicio $servicio)
    {
        $this->servicio = $servicio;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Notifica Orden Creada',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'correos.notifica_ordencreada',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
