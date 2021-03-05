<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AddressingTheTeam extends Mailable
{
    use Queueable, SerializesModels;

    public $description;
    public $name;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $description, $email)
    {
        $this->name = $name;
        $this->description = $description;
        $this->email= $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.addressing');
    }
}

