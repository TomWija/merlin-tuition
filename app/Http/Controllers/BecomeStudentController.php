<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BecomeStudentController extends Controller
{
    public function index(Request $request)
    {
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
}
