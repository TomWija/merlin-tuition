@extends('layouts.main')

@section('content')

@include('components.splash')

<div class="home container vertical-gutters--large">
	<div class="row">
		This is going to contain all the content for the home page.
	</div>
	<div class="row">
		<div class="col-md-4">
			Column 1
		</div>

		<div class="col-md-4">
			Column 2
		</div>

		<div class="col-md-4">
			Column 3
		</div>
	</div>
</div>

@endsection
