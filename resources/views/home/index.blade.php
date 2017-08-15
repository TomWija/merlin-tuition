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

<div class="container badges">
    <div class="row">
        <div class="col-md-7">
            <div id="kallikids_review_widget_highscore_v"
                data-provider="9d2682367c3935defcb1f9e247a97c0d"
                data-domain="https://kallikids.com">
            </div>
        </div>
        <div class="col-md-5">
            <img class="tutors-association" src="{{ asset('images/corporate-member.png') }}"></img>
        </div>
    </div>
</div>

@endsection
