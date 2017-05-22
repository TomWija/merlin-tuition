<div class="container-fluid splash">
	<div class="container">
		<div class="splash__heading">{!! $pageContent->where('key', 'splash.header')->first()->content !!}</div>
		<form action="{{ route('become-student') }}" method="POST" class="splash__form">
			<div class="row">
				<div class="col-sm-4">
					<div class="rounded select--primary">
						<select name="subjectOne">
							@foreach ($subjects as $subject)
								<option value="{{ $subject->name }}">{{ $subject->name }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="rounded select--primary ">
						<select name="levelOne">
							<option value="primary">Primary</option>
							<option value="secondary">Secondary</option>
							<option value="gcse">GCSE</option>
							<option value="ALevel">A-Level</option>
							<option value="Bachelors">University - Bachelor's</option>
							<option value="Masters">University - Master's</option>
							<option value="adult-casual">Adult/Casual Learner</option>
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
