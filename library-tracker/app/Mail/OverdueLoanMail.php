<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OverdueLoanMail extends Mailable
{
    use Queueable, SerializesModels;
public $loan;
    /**
     * Create a new message instance.
     */
    public function __construct($loan)
    {
        $this->loan = $loan;

    }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function build(): array
    {
        return  $this->subject('Overdue Book Loan Notification')->markdown('emails.overdue');
    }
}
