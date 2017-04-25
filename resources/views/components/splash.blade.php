<div class="container-fluid splash">
	<div class="container">
		<h1 class="splash__heading">{{ $pageContent->where('key', 'splash.header')->first()->content }}</h1>
		<form action="{{ route('become-student') }}" method="POST" class="splash__form">
			<div class="row">
				<div class="col-sm-4">
					<div class="rounded select--primary">
						<select name="subjectOne">
							<option>English</option>
							<option>Maths</option>
							<option>ICT</option>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="rounded select--primary ">
						<select name="levelOne">
							<option>GCSE</option>
							<option value="ALevel">A-Level</option>
							<option value="BSc">Bachelor's Degree</option>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input class="cta--primary rounded" type="submit" value="Become a Student" />
				</div>
			</div>
		</form>
	</div>
</div>
