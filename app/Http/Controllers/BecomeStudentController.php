<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Redirect;

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
        dump($request->input());
        $params = [
            'subjectOne' => null,
            'levelOne' => null
        ];

        foreach($request->input() as $param => $value) {
            $params[$param] = $value;
        }

		return response()
				->view('become-student.index', [
					'params' => $params
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
        $request->session()->flash('status', 'Task was successful!');
        return redirect()->back()->withInput();
    }

}
