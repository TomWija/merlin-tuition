@extends('layouts.main')

@section('content')

<div class="become-student container vertical-gutters--large">
	<div class="row text-center">
		@if ($flashMessage)
			<h2>{{ $flashMessage }}</h2>
		@endif
		<h1>Sign Up As a Student Today</h1>
	</div>
	<form action="{{ route('become-student.submit') }}" method="POST">
		<div class="row become-student__form-row vertical-gutters--large">
			<div class="col-md-7">
				<div class="row become-student__form-row">
					<div class="col-xs-12">
						<label>Full Name*</label>
						<input name="name" type="text" value="{{ old('name') }}" required />
					</div>
				</div>

				<div class="row become-student__form-row">
					<div class="col-sm-6">
						<label>E-mail Address*</label>
						<input name="email" type="email" value="{{ old('email') }}" required />
					</div>

					<div class="col-sm-6">
						<label>Contact Number</label>
						<input name="number" type="text" value="{{ old('number') }}" />
					</div>
				</div>

				<div class="row become-student__form-row">
					<div class="col-sm-6">
						<label>Subject</label>
						<div class="rounded select--primary">
							<select name="subjectOne">
								<option value="English" {{ $params['subjectOne'] == 'English' ? "selected='selected'" : ""}}>English</option>
								<option value="Maths" {{ $params['subjectOne'] == 'Maths' ? "selected='selected'" : ""}}>Maths</option>
								<option value="ICT" {{ $params['subjectOne'] == 'ICT' ? "selected='selected'" : ""}}>ICT</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6">
						<label>Level</label>
						<div class="rounded select--primary ">
							<select name="levelOne">
								<option value="GCSE" {{ $params['levelOne'] == 'GCSE' ? "selected='selected'" : ""}}>GCSE</option>
								<option value="ALevel" {{ $params['levelOne'] == 'ALevel' ? "selected='selected'" : ""}}>A-Level</option>
								<option value="BSc" {{ $params['levelOne'] == 'BSc' ? "selected='selected'" : ""}}>Bachelor's Degree</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row become-student__form-row vertical-gutters--medium">
					<div class="col-xs-12">
						<a class="become-student__add-subject-button" href="#">Add another subject...</a>
					</div>
				</div>

				<div class="row become-student__form-row">
					<div class="col-xs-12">
						<label>Location*</label>
						<input name="location" type="text" value="{{ old('location') }}" required />
					</div>
				</div>

				<div class="row become-student__form-row">
					<div class="col-xs-12">
						<label>Additional inormation</label>
						<div>
							<textarea name="extraInfo" rows="4">{{ old('extraInfo') }}</textarea>
						</div>
					</div>
				</div>

				<div class="row become-student__form-row">
					<div class="col-xs-12">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input class="cta--primary rounded" type="submit" value="Submit" />
					</div>
				</div>
			</div>

			<div class="col-md-5">
				<h2 class="text-center vertical-gutters--medium">About our tutors</h2>
				<ul>
	                <li>Experience tutoring one-to-one or in small groups</li>
	                <li>Experience working with students that have learning difficulties</li>
	                <li>Able to work with students speaking english as a foreign language</li>
	                <li>After applying, we will do our best to find a tutor to meet all your requirements</li>
	            </ul>

				<h2 class="text-center vertical-gutters--medium">What we offer</h2>
				<ul>
                    <li>English up to GCSE, with Literature and Language at A-Level and Undergraduate levels</li>
                    <li>Maths and Further Maths up to A-Level</li>
                    <li>Biology up to Undergraduate level</li>
                    <li>Chemistry up to A-Level</li>
                    <li>Physics up to A-Level</li>
                    <li>Computer Science up to A-Level</li>
                    <li>History up to Master's Degree Level</li>
                    <li>Classics up to A-Level</li>
                    <li>French and Spanish up to A-Level</li>
                    <li>Geography up to A-Level</li>
                    <li>Art from GCSE to Master's Degree</li>
                    <li>Philosophy from GCSE to Undegraduate Level</li>
                    <li>Law at A-level</li>
                    <li>Economics at A-Level</li>
                </ul>

				<h2 class="text-center vertical-gutters--medium">Pricing</h2>
				<p>Prices vary depending on the level of qualification you are
                    working towards and the experience of the tutor you are
                    looking to work with. In general prices range from £20/hour
                    for tutors in their first years tutoring to £40/hour for
                    the most experienced tutors. This can also vary with subject
                    and other considerations.</p>

				<h2 class="text-center vertical-gutters--medium">Our Guarantee</h2>
				<p>We work with every tutor to ensure that they can tutor to the
					level that they say that they can so that you can get the
					best tutor for your needs</p>
			</div>
		</div>
	</form>
</div>

@endsection
