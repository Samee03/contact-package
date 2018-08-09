<?php

namespace Ultron\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    private $message = null;
    private $name = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $name, $from)
    {
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.mail')->with(['message' => $this->message, 'name' => $this->name]);
    }
}
