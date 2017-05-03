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
        Mail::to('thomas.wija@gmail.com')
            ->send(new ContactForm($request));

        $request->session()->flash('status', 'Thank you for your enquiry!');
        return redirect()->back()->withInput();
    }
}
