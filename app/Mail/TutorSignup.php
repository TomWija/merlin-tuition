<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TutorSignup extends Mailable
{
    use Queueable, SerializesModels;

    public $params;

    public $notification;

    public $supportingFiles;

    /**
     * Create a new message instance.
     *
     * @param Illuminate\Http\Request   $request
     * @return void
     */
    public function __construct($request, $notification = false)
    {
        $this->params = $request->input();
        $this->supportingFiles = $request->supportingFiles;
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
                
        		$fileNames = array();

        		foreach($this->supportingFiles as $file) {
        			$fileNames[] = $file->store('supportingFiles');
        		}
                // dump($fileNames); die;

            return $this->subject('A new tutor has enquired about becoming a tutor with you!')
                ->view('emails.tutor-signup-notification')
                ->attach($fileNames[0], [
                    'as' => 'test.pdf',
                    'mime' => 'application/pdf'
                ]);
        } else {
            return $this->subject('Thank you for signing up to become a tutor with Merlin Tuition!')
                ->view('emails.tutor-signup');
        }
    }
}
