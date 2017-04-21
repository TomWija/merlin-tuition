<div class="container-fluid splash">
	<div class="container">
		<h1 class="splash__heading">{{ $pageContent->where('key', 'splash.header')->first()->content }}</h1>
		<form class="splash__form">
			<div class="row">
				<div class="col-sm-4">
					<div class="rounded select--primary">
						<select name="subject-one">
							<option>English</option>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="rounded select--primary ">
						<select name="level-one">
							<option>GCSE</option>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<input class="cta--primary rounded" type="submit" value="Become a Student" />
				</div>
			</div>
		</form>
	</div>
</div>
