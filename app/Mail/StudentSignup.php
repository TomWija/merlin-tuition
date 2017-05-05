<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class StudentSignup extends Mailable
{
    use Queueable, SerializesModels;

    public $params;

    public $notification;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $notification = false)
    {
        $this->params = $request->input();
        $this->notification = $notification;

        unset($this->params['_token']);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->notification) {
            return $this->subject('A new student has enquired about tutors!')
                ->view('emails.student-signup-notification');
        } else {
            return $this->subject('Thank you for signing up to Merlin Tuition!')
                ->view('emails.student-signup');
        }
    }
}
