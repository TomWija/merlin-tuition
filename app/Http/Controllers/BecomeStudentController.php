<?php

namespace App\Http\Controllers;

use App\Mail\StudentSignup;
use Illuminate\Http\Request;
use Illuminate\Http\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Models\Page;
use App\Models\PageContent;

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
		$pageContent = PageContent::where('page_id', 3)->get();

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
                    'flashMessage' => $flashMessage,
                    'pageContent' => $pageContent
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
        $input = $request->input();

        if(isset($input['name']) && isset($input['email']) && isset($input['subjectOne']) && isset($input['levelOne'])) {
            Mail::to($request->input()['email'])
                ->send(new StudentSignup($request));


            Mail::to($request->input()['email']) // This needs to be to the main admin of the site
                ->send(new StudentSignup($request, true));

            $request->session()->flash('status', 'Thank you for your submission!');
            return redirect()->back()->withInput();
        } else {
            $request->session()->flash('status', 'There was an error with your submission.');
            return redirect()->back()->withInput();
        }




    }

}
