<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $hoadon;
    /**
     * Create a new message instance.
     */
    public function __construct($hoadon)
    {
        $this->hoadon = $hoadon;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Khách đã đặt phòng',
        );
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))->view('user.send-mail-admin');
    }
}
