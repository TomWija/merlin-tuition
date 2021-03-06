<?php

namespace App\Http\Controllers;

use App\Mail\TutorSignup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Page;
use App\Models\PageContent;

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
		$pageContent = PageContent::where('page_id', 4)->get();

        foreach($request->input() as $param => $value) {
            $params[$param] = $value;
        }

		return response()
				->view('become-tutor.index', [
					'params' => $params,
                    'flashMessage' => $flashMessage,
					'pageContent' => $pageContent
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
		$input = $request->input();

		if(isset($input['name']) && isset($input['email']) && isset($input['whyTutor']) && isset($input['whatExperience']) && isset($input['whatSubjects']) && isset($input['whereTravel'])) {
		    Mail::to($request->input()['email'])
		        ->send(new TutorSignup($request));


		    Mail::to($request->input()['email']) // This needs to be to the main admin of the site
		        ->send(new TutorSignup($request, true));

		    $request->session()->flash('status', 'Thank you for your submission!');
		    return redirect()->back()->withInput();
		} else {

		}
    }
}
