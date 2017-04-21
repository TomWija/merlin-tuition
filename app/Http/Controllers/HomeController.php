<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Page;
use App\Models\PageContent;

class HomeController extends Controller
{

	public function index(Request $request)
	{
		$testimonials = Testimonial::get();
		$pageContent = PageContent::where('page_id', 1)->get();

		return response()
				->view('home.index', [
					'testimonials' => $testimonials,
					'pageContent' => $pageContent
				]);
	}
}
