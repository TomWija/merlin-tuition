@extends('layouts.main')

@section('content')

@include('components.splash')

<div class="home container vertical-gutters--large">
	<div class="row">
		<div class="col-md-4">
			<div class="home__card">
				<div class="home__card-image" style="background: url({{ asset('placeholder.png') }});"></div>
				<h2>Column 1 Heading</h2>
				<p>This will have a maximum of 250 characters length. If the
				content entered is shorter than 250 characters, the length
				of the card will still be the same as if it were filled up. The
				picture will also be chooseable.</p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="home__card">
				<div class="home__card-image" style="background: url({{ asset('placeholder.png') }});"></div>
				<h2>Column 2 Heading</h2>
				<p>This will have a maximum of 250 characters length. If the
				content entered is shorter than 250 characters, the length
				of the card will still be the same as if it were filled up.The
				picture will also be chooseable.</p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="home__card">
				<div class="home__card-image" style="background: url({{ asset('placeholder.png') }});"></div>
				<h2>Column 3 Heading</h2>
				<p>This will have a maximum of 250 characters length. If the
				content entered is shorter than 250 characters, the length
				of the card will still be the same as if it were filled up.The
				picture will also be chooseable.</p>
			</div>
		</div>
	</div>
</div>

@include('components.testimonials')

@endsection
