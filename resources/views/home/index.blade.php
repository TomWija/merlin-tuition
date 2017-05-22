@extends('layouts.main')

@section('content')

@include('components.splash')

<div class="home container vertical-gutters--large">
	<div class="row">
		<div class="col-md-4">
			<div class="home__card">
				<div class="home__card-image" style="background: url({{ asset('placeholder.png') }});"></div>
				{!! $pageContent->where('key', 'home.left_column.header')->first()->content !!}
				{!! $pageContent->where('key', 'home.left_column.text')->first()->content !!}
			</div>
		</div>

		<div class="col-md-4">
			<div class="home__card">
				<div class="home__card-image" style="background: url({{ asset('placeholder.png') }});"></div>
				{!! $pageContent->where('key', 'home.middle_column.header')->first()->content !!}
				{!! $pageContent->where('key', 'home.middle_column.text')->first()->content !!}
			</div>
		</div>

		<div class="col-md-4">
			<div class="home__card">
				<div class="home__card-image" style="background: url({{ asset('placeholder.png') }});"></div>
				{!! $pageContent->where('key', 'home.right_column.header')->first()->content !!}
				{!! $pageContent->where('key', 'home.right_column.text')->first()->content !!}
			</div>
		</div>
	</div>
</div>

@include('components.testimonials')

@endsection
