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
				<h3 class="vertical-gutters--medium">{{ $page->page_label }} Content</h3>
				@foreach($pageContent[$page->page_name] as $pageSection)
					<h4>{{ $pageSection->key }}</h4>
					<textarea>{{ $pageSection->content }}</textarea>
				@endforeach
			</div>
		@endforeach
	</div>

@endsection
