<div class="container-fluid splash">
	<div class="container">
		<div class="splash__heading">{!! $pageContent->where('key', 'splash.header')->first()->content !!}</div>
		<form action="{{ route('become-student') }}" method="POST" class="splash__form">
			<div class="row">
				<div class="col-sm-4">
					<div class="rounded select--primary">
						<select class="splash-subject-selector" name="subject1">
                                <option value="0">Choose a Subject</option>
							@foreach ($subjects as $subject)
								<option value="{{ $subject->name }}">{{ $subject->name }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="rounded select--primary ">
						<select class="splash-level-selector" name="level1">
                            <option>Choose a Level</option>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input class="cta cta--primary rounded" type="submit" value="Become a Student" />
				</div>
			</div>
		</form>
	</div>
</div>
