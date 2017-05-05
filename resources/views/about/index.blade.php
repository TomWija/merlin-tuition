@extends('layouts.main')

@section('content')

<div class="container about vertical-gutters--large">
	<h1 class="text-center vertical-gutters--large">{{ $pageContent->where('key', 'about.header_one')->first()->content }}</h1>
	{!! $pageContent->where('key', 'about.section_one')->first()->content !!}

	<h1 class="text-center vertical-gutters--large">{{ $pageContent->where('key', 'about.header_two')->first()->content }}</h1>
    {!! $pageContent->where('key', 'about.section_two')->first()->content !!}
</div>

@endsection
