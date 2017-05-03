<?php

namespace App\Http\Controllers;

use App\Mail\TutorSignup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BecomeTutorController extends Controller
{
	/**
     * Function to display the main become tutor page
     *
     * @param Illuminate\Http\Request   $request
     * @return Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $flashMessage = $request->session()->pull('status');
		$params = array();

        foreach($request->input() as $param => $value) {
            $params[$param] = $value;
        }

		return response()
				->view('become-tutor.index', [
					'params' => $params,
                    'flashMessage' => $flashMessage
				]);
    }

    /**
     * This is what's called  when a user submits an application to become
     * a tutor. Sends an e-mail to the site owner with the details and creates
     * a new Tutor
     *
     * @param Illuminate\Http\Request   $request
     * @return Illuminate\Http\Response
     */
    public function submitApplication(Request $request)
    {
        Mail::to('thomas.wija@gmail.com')
            ->send(new TutorSignup($request));


        Mail::to('thomas.wija@gmail.com')
            ->send(new TutorSignup($request, true));

        $request->session()->flash('status', 'Thank you for your submission!');
        return redirect()->back()->withInput();
    }
}
