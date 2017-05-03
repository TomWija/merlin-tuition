<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $params;

    /**
     * Create a new message instance.
     *
     * @param Illuminate\Http\Request   $request
     * @return void
     */
    public function __construct($request)
    {
        $this->params = $request->input();
        unset($this->params['_token']);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this->subject("You've had a new enquiry!")
                ->view('emails.enquiry');
    }
}
