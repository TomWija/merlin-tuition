@extends('layouts.admin.panel')

@section('admin-panel-content')

	<ul class="nav nav-tabs">
		@foreach($pages as $page)
	    	<li {{ $page->id == 1 ? "class=active" : "" }}><a data-toggle="tab" href="#{{ $page->page_name }}">{{ $page->page_label }}</a></li>
		@endforeach
	</ul>

	<div class="tab-content">
		@foreach($pages as $page)
			<div id="{{ $page->page_name }}" class="tab-pane fade in {{ $page->id == 1 ? "active" : "" }}">
				<h2 class="vertical-gutters--medium">{{ $page->page_label }} Content</h2>
                <form action="{{ route('admin-page-content.update') }}" method="POST">
    				@foreach($pageContent[$page->page_name] as $pageSection)
    					<h4 class="vertical-gutters--medium">{{ $pageSection->key }}</h4>
    					<textarea rows="4" name="pageSection[{{ $pageSection->page_section }}]">{{ $pageSection->content }}</textarea>
    				@endforeach
					<input type="hidden" name="pageName" value="{{ $page->page_name }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="cta cta--primary rounded" type="submit" value="Submit" />
                </form>
			</div>
		@endforeach
	</div>

@endsection
