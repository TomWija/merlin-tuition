<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class HomeController extends Controller
{

	public function index(Request $request)
	{
		$testimonials = Testimonial::get();

		return response()
				->view('home.index', [
					'testimonials' => $testimonials
				]);
	}
}
