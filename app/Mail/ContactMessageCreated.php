<?php

namespace App\Mail;

use App\Models\User\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $content)
    {
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->content->email)->markdown('emails.message.created');
    }
}
