<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Page;
use App\Models\PageContent;

class AboutController extends Controller
{

	public function index(Request $request)
	{
		$pageContent = PageContent::where('page_id', 2)->get();

		return response()
				->view('about.index', [
					'pageContent' => $pageContent
				]);
	}
}
