@extends('layouts.main')

@section('content')

<div class="container-fluid splash">
	<form>
		<select name="subject-one">
			<option>English</option>
		</select>

		<select name="level-one">
			<option>GCSE</option>
		</select>

		<input type="submit" value="Become a Student" />
	</form>
</div>

<div style="background-color: #353C3F; width: 100vw; height: 200px;">
</div>

@endsection
