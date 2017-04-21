<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BecomeStudentController extends Controller
{
    public function index(Request $request)
    {
		$params = $request->input();

		return response()
				->view('become-student.index', [
					'params' => $params
				]);
    }
}
