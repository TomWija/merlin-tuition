@extends('layouts.main')

@section('content')

@include('components.splash')

<div class="home container vertical-gutters--large">
	<div class="row">
		<div class="col-md-4">
			<div class="home__card">
				<div class="home__card-image" style="background: url({{ asset('placeholder.png') }});"></div>
				<h2>{{ $pageContent->where('key', 'left_column.header')->first()->content }}</h2>
				<p>{{ $pageContent->where('key', 'left_column.text')->first()->content }}</p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="home__card">
				<div class="home__card-image" style="background: url({{ asset('placeholder.png') }});"></div>
				<h2>{{ $pageContent->where('key', 'middle_column.header')->first()->content }}</h2>
				<p>{{ $pageContent->where('key', 'middle_column.text')->first()->content }}</p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="home__card">
				<div class="home__card-image" style="background: url({{ asset('placeholder.png') }});"></div>
				<h2>{{ $pageContent->where('key', 'right_column.header')->first()->content }}</h2>
				<p>{{ $pageContent->where('key', 'right_column.text')->first()->content }}</p>
			</div>
		</div>
	</div>
</div>

@include('components.testimonials')

@endsection
