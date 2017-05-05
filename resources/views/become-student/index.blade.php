@extends('layouts.main')

@section('content')

<div class="become-student container vertical-gutters--large">
	<div class="row text-center">
		@if ($flashMessage)
			<h1 style="margin-bottom: 20px">{{ $flashMessage }}</h1>
		@endif
		<h1>{{ $pageContent->where('key', 'main_header')->first()->content }}</h1>
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
						<label>Subject One*</label>
						<div class="rounded select--primary">
							<select name="subjectOne">
								<option value="English" {{ $params['subjectOne'] == 'English' ? "selected='selected'" : ""}}>English</option>
								<option value="Maths" {{ $params['subjectOne'] == 'Maths' ? "selected='selected'" : ""}}>Maths</option>
								<option value="ICT" {{ $params['subjectOne'] == 'ICT' ? "selected='selected'" : ""}}>ICT</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6">
						<label>Level One*</label>
						<div class="rounded select--primary ">
							<select name="levelOne">
								<option value="GCSE" {{ $params['levelOne'] == 'GCSE' ? "selected='selected'" : ""}}>GCSE</option>
								<option value="ALevel" {{ $params['levelOne'] == 'ALevel' ? "selected='selected'" : ""}}>A-Level</option>
								<option value="BSc" {{ $params['levelOne'] == 'BSc' ? "selected='selected'" : ""}}>Bachelor's Degree</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row become-student__form-row">
					<div class="col-sm-6">
						<label>Subject Two</label>
						<div class="rounded select--primary">
							<select name="subjectTwo">
								<option value="English" {{ $params['subjectTwo'] == 'English' ? "selected='selected'" : ""}}>English</option>
								<option value="Maths" {{ $params['subjectTwo'] == 'Maths' ? "selected='selected'" : ""}}>Maths</option>
								<option value="ICT" {{ $params['subjectTwo'] == 'ICT' ? "selected='selected'" : ""}}>ICT</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6">
						<label>Level Two</label>
						<div class="rounded select--primary ">
							<select name="levelTwo">
								<option value="GCSE" {{ $params['levelTwo'] == 'GCSE' ? "selected='selected'" : ""}}>GCSE</option>
								<option value="ALevel" {{ $params['levelTwo'] == 'ALevel' ? "selected='selected'" : ""}}>A-Level</option>
								<option value="BSc" {{ $params['levelTwo'] == 'BSc' ? "selected='selected'" : ""}}>Bachelor's Degree</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row become-student__form-row">
					<div class="col-sm-6">
						<label>Subject Three</label>
						<div class="rounded select--primary">
							<select name="subjectThree">
								<option value="English" {{ $params['subjectThree'] == 'English' ? "selected='selected'" : ""}}>English</option>
								<option value="Maths" {{ $params['subjectThree'] == 'Maths' ? "selected='selected'" : ""}}>Maths</option>
								<option value="ICT" {{ $params['subjectThree'] == 'ICT' ? "selected='selected'" : ""}}>ICT</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6">
						<label>Level Three</label>
						<div class="rounded select--primary ">
							<select name="levelThree">
								<option value="GCSE" {{ $params['levelThree'] == 'GCSE' ? "selected='selected'" : ""}}>GCSE</option>
								<option value="ALevel" {{ $params['levelThree'] == 'ALevel' ? "selected='selected'" : ""}}>A-Level</option>
								<option value="BSc" {{ $params['levelThree'] == 'BSc' ? "selected='selected'" : ""}}>Bachelor's Degree</option>
							</select>
						</div>
					</div>
				</div>

				{{-- <div class="row become-student__form-row vertical-gutters--medium">
					<div class="col-xs-12">
						<a class="become-student__add-subject-button" href="#">Add another subject...</a>
					</div>
				</div> --}}

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
				<h2 class="text-center vertical-gutters--medium">{{ $pageContent->where('key', 'become_student.right_column.header_one')->first()->content }}</h2>
				{!! $pageContent->where('key', 'become_student.right_column.content_one')->first()->content !!}

				<h2 class="text-center vertical-gutters--medium">{{ $pageContent->where('key', 'become_student.right_column.header_two')->first()->content }}</h2>
				{!! $pageContent->where('key', 'become_student.right_column.content_two')->first()->content !!}

				<h2 class="text-center vertical-gutters--medium">{{ $pageContent->where('key', 'become_student.right_column.header_three')->first()->content }}</h2>
				{!! $pageContent->where('key', 'become_student.right_column.content_three')->first()->content !!}

				<h2 class="text-center vertical-gutters--medium">{{ $pageContent->where('key', 'become_student.right_column.header_four')->first()->content }}</h2>
				{!! $pageContent->where('key', 'become_student.right_column.content_four')->first()->content !!}
			</div>
		</div>
	</form>
</div>

@endsection
