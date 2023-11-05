<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Petition;

class StatusMail extends Mailable
{
    use Queueable, SerializesModels;
    public Petition $petition;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($petition)
    {
        //
        $this->petition=$petition;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Petition Submition Confirmation')->view('mail.statusmail');
    }
}
