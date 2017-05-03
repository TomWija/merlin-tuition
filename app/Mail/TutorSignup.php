<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TutorSignup extends Mailable
{
    use Queueable, SerializesModels;

    public $params;

    public $notification;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params, $notification = false)
    {
        unset($params['_token']);
        $this->params = $params;
        $this->notification = $notification;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->notification) {
            return $this->subject('A new tutor has enquired about becoming a tutor with you!')
                ->view('emails.tutor-signup-notification')
                ->attach($this->params['supportingFile']);
        } else {
            return $this->subject('Thank you for signing up to become a tutor with Merlin Tuition!')
                ->view('emails.tutor-signup');
        }
    }
}
