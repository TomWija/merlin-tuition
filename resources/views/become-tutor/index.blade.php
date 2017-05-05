@extends('layouts.main')

@section('content')

<div class="become-tutor container vertical-gutters--large">
	<div class="row text-center">
		@if ($flashMessage)
			<h1 style="margin-bottom: 20px">{{ $flashMessage }}</h1>
		@endif
		<h1>{{ $pageContent->where('key', 'become_tutor.main_header')->first()->content }}</h1>
	</div>
	<form action="{{ route('become-tutor.submit') }}" method="POST" enctype="multipart/form-data">
		<div class="row become-tutor__form-row vertical-gutters--large">
			<div class="col-md-7">
				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>Full Name*</label>
						<input type="text" name="name" required/>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-sm-6">
						<label>E-mail Address*</label>
						<input type="email" name="email" required/>
					</div>

					<div class="col-sm-6">
						<label>Contact Number</label>
						<input type="text" name="contactNumber"/>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>Why do you want to tutor with us?*</label>
						<div>
						<textarea rows="4" name="whyTutor" required></textarea>
						</div>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>What experience with tuition do you have so far?*</label>
						<div>
						<textarea rows="4" name="whatExperience" required></textarea>
						</div>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>What subjects can you tutor, to what level and with which exam boards?*</label>
						<div>
						<textarea rows="4" name="whatSubjects" required></textarea>
						</div>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>Where and when can you run sessions? How far are you willing to travel?*</label>
						<div>
						<textarea rows="4" name="whereTravel" required></textarea>
						</div>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>Please upload any supporting files/documents (CV, DBS etc.)</label>
						<label for="supporting-file" class="file-upload-button"><span class="glyphicon glyphicon-open"></span>&nbsp;&nbsp;&nbsp;Upload a file or files</label>
						<input type="file" class="inputfile" name="supportingFiles[]" id="supporting-file" data-multiple-caption="{count} files selected" multiple>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<label>Any other information you wish to provide?</label>
						<div>
						<textarea rows="2" name="extraInfo"></textarea>
						</div>
					</div>
				</div>

				<div class="row become-tutor__form-row">
					<div class="col-xs-12">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input class="cta--primary rounded" type="submit" value="Submit application" />
					</div>
				</div>

			</div>
			<div class="col-md-5">
				<h2 class="text-center vertical-gutters--medium">{{ $pageContent->where('key', 'become_tutor.right_column.header_one')->first()->content }}</h2>
				{!! $pageContent->where('key', 'become_tutor.right_column.content_one')->first()->content !!}

				<h2 class="text-center vertical-gutters--medium">{{ $pageContent->where('key', 'become_tutor.right_column.header_two')->first()->content }}</h2>
				{!! $pageContent->where('key', 'become_tutor.right_column.content_two')->first()->content !!}
			</div>
		</div>
	</form>
</div>

@endsection
