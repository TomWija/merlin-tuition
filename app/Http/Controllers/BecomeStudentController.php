<?php

namespace App\Http\Controllers;

use App\Mail\StudentSignup;
use Illuminate\Http\Request;
use Illuminate\Http\Redirect;
use Illuminate\Support\Facades\Mail;

class BecomeStudentController extends Controller
{
    /**
     * Function to display the main become student page
     *
     * @param Illuminate\Http\Request   $request
     * @return Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $flashMessage = $request->session()->pull('status');

        $params = [
            'subjectOne' => null,
            'levelOne' => null,
            'subjectTwo' => null,
            'levelTwo' => null,
            'subjectThree' => null,
            'levelThree' => null
        ];

        foreach($request->input() as $param => $value) {
            $params[$param] = $value;
        }

		return response()
				->view('become-student.index', [
					'params' => $params,
                    'flashMessage' => $flashMessage
				]);
    }

    /**
     * This is what's called  when a user submits an application to become
     * a student. Sends an e-mail to the site owner with the details and creates
     * a new Student
     *
     * @param Illuminate\Http\Request   $request
     * @return Illuminate\Http\Response
     */
    public function submitApplication(Request $request)
    {
        Mail::to('thomas.wija@gmail.com')
            ->send(new StudentSignup($request));


        Mail::to('thomas.wija@gmail.com')
            ->send(new StudentSignup($request, true));

        $request->session()->flash('status', 'Thank you for your submission!');
        return redirect()->back()->withInput();
    }

}
