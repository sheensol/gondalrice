<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomSendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contact_detail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact_detail)
    {
        $this->contact_detail = $contact_detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact_email');
    }
}
