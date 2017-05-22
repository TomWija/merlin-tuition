@extends('layouts.admin')

@section('content')


<div class="admin container">
	<div class="row">
		<div class="admin__nav-panel col-sm-3">
			@include('layouts.admin.nav')
		</div>
		<div class="admin__main-panel col-sm-9">
			@yield('admin-content')
		</div>
	</div>
</div>

@endsection
