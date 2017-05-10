<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
	/**
	 * Called when a user uses the contact form
	 *
	 * @param Illuminate\Http\Request $request
	 */
	public function submitContactForm(Request $request)
    {
		$input = $request->input();

		if (isset($input['name']) && isset($input['email']) && isset($input['enquiry'])) {
	        Mail::to($request->input()['email'])
	            ->send(new ContactForm($request));

	        $request->session()->flash('status', 'Thank you for your enquiry!');
	        return redirect()->back()->withInput();
		} else {
			$request->session()->flash('status', 'There was a problem with your submission.');
	        return redirect()->back()->withInput();
		}
    }
}
