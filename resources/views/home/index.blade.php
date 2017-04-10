@extends('layouts.main')

@section('content')

<div class="container-fluid splash">
	<div class="container">
		<form>
			<div class="rounded select--primary">
				<select name="subject-one">
					<option>English</option>
				</select>
			</div>
			<div class="rounded select--primary">
				<select name="level-one">
					<option>GCSE</option>
				</select>
			</div>
			<input class="cta--primary rounded" type="submit" value="Become a Student" />
		</form>
	</div>
</div>

<div style="background-color: #353C3F; width: 100vw; height: 200px;">
</div>

@endsection
