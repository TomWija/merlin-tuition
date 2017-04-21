@extends('layouts.main')

@section('content')

<div class="become-student container vertical-gutters--large">
	<div class="row text-center">
		<h1>Sign Up As a Student Today</h1>
	</div>
	<form>
		<div class="row become-student__form-row vertical-gutters--large">
			<div class="col-md-7">
				<div class="row become-student__form-row">
					<div class="col-xs-12">
						<label>Full Name*</label>
						<input type="text" />
					</div>
				</div>

				<div class="row become-student__form-row">
					<div class="col-sm-6">
						<label>E-mail Address*</label>
						<input type="text" />
					</div>

					<div class="col-sm-6">
						<label>Contact Number</label>
						<input type="text" />
					</div>
				</div>

				<div class="row become-student__form-row">
					<div class="col-sm-6">
						<label>Subject</label>
						<div class="rounded select--primary">
							<select name="subjectOne">
								<option {{ $params['subjectOne'] == 'English' ? "selected='selected'" : ""}}>English</option>
								<option {{ $params['subjectOne'] == 'Maths' ? "selected='selected'" : ""}}>Maths</option>
								<option {{ $params['subjectOne'] == 'ICT' ? "selected='selected'" : ""}}>ICT</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6">
						<label>Level</label>
						<div class="rounded select--primary ">
							<select name="levelOne">
								<option>GCSE</option>
								<option>A-Level</option>
								<option>Bachelor's Degree</option>
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
						<input type="text" />
					</div>
				</div>

				<div class="row become-student__form-row">
					<div class="col-xs-12">
						<label>Additional inormation</label>
						<div>
							<textarea rows="4"></textarea>
						</div>
					</div>
				</div>

				<div class="row become-student__form-row">
					<div class="col-xs-12">
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
