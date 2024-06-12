<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LoginLink extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public readonly string $url,
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Magic Login Link is here!',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.auth.login-link',
            with: [
                'url' => $this->url,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
