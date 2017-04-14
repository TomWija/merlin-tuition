@extends('layouts.main')

@section('content')

@include('components.splash')

<div class="home container vertical-gutters--large">
	<div class="row">
		<div class="col-md-4">
			<div class="home__card">
				<div class="home__card-image" style="background: url({{ asset('placeholder.png') }});"></div>
				<h2>Column 1 Heading</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
				Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
				natoque penatibus et magnis dis parturient montes, nascetur
				ridiculus mus. Donec quam felis, ultricies nec, pellentesque
				eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="home__card">
				<div class="home__card-image" style="background: url({{ asset('placeholder.png') }});"></div>
				<h2>Column 2 Heading</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
				Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
				natoque penatibus et magnis dis parturient montes, nascetur
				ridiculus mus. Donec quam felis, ultricies nec, pellentesque
				eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="home__card">
				<div class="home__card-image" style="background: url({{ asset('placeholder.png') }});"></div>
				<h2>Column 3 Heading</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
				Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
				natoque penatibus et magnis dis parturient montes, nascetur
				ridiculus mus. Donec quam felis, ultricies nec, pellentesque
				eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
			</div>
		</div>
	</div>
</div>

@include('components.testimonials')

@endsection
