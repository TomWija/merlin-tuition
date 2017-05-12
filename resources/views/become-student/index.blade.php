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
								@foreach ($subjects as $subject)
									<option value="{{ $subject->name }}" {{ $params['subjectOne'] == $subject->name ? "selected='selected'" : ""}}>{{ $subject->name }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="col-sm-6">
						<label>Level One*</label>
						<div class="rounded select--primary ">
							<select name="levelOne">
								<option value="primary" {{ $params['levelOne'] == 'primary' ? "selected='selected'" : ""}}>Primary</option>
								<option value="secondary" {{ $params['levelOne'] == 'secondary' ? "selected='selected'" : ""}}>Secondary</option>
								<option value="gcse" {{ $params['levelOne'] == 'gcse' ? "selected='selected'" : ""}}>GCSE</option>
								<option value="ALevel" {{ $params['levelOne'] == 'ALevel' ? "selected='selected'" : ""}}>A-Level</option>
								<option value="Bachelors" {{ $params['levelOne'] == 'Bachelors' ? "selected='selected'" : ""}}>University - Bachelor's</option>
								<option value="Masters" {{ $params['levelOne'] == 'Masters' ? "selected='selected'" : ""}}>University - Master's</option>
								<option value="adult-casual" {{ $params['levelOne'] == 'adult-casual' ? "selected='selected'" : ""}}>Adult/Casual</option>
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
