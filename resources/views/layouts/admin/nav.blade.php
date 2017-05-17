<a class="nav-link" href="{{ route('admin-home') }}">
	<div class="row nav-row vertical-gutters--medium">
		<div class="col-xs-12">
			Statistics
		</div>
	</div>
</a>

<a class="nav-link" href="{{ route('admin-page-content') }}">
	<div class="row nav-row vertical-gutters--medium">
		<div class="col-xs-12">
			Page Content
		</div>
	</div>
</a>

<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
	<div class="row nav-row vertical-gutters--medium">
		<div class="col-xs-12">
			Logout
		</div>
	</div>
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	{{ csrf_field() }}
</form>
