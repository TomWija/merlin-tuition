<?php

namespace App\Http\Controllers\Admin;

use App\Models\PageContent;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageContentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::get();
        $pageContent = array();

        foreach($pages as $page) {
            $pageContent[$page->page_name] = PageContent::where('page_id', $page->id)->get();
        }

        return response()->view('admin.page-content', [
            'pages' => $pages,
            'pageContent' => $pageContent
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  array                    $data
     * @param  \App\Models\PageContent  $pageContent
     */
    public function updateOne($data, PageContent $pageContent)
    {
        //
    }

    /**
     * Update the specified resources in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateAll(Request $request)
    {
        $input = $request->input();
        $page = Page::where('page_name', $input['pageName'])->get()->first();
        $pageContents = PageContent::where('page_id', $page->id)->get();

        foreach($pageContents as $pageContent) {
            $pageContent->content = $input['pageSection'][$pageContent->page_section];
            $pageContent->save();
        }

        return redirect()->back()->withInput();
    }
}
