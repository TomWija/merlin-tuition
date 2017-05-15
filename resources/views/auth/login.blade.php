@extends('layouts.auth.main')

@section('content')
<div class="auth">
    <div class="login container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center vertical-gutters--medium"><h1>Admin Login</h1></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                    		<div class="row login__form-row">
                    			<div class="col-md-offset-1 col-md-10">
                    				<div class="row login__form-row">
                    					<div class="col-xs-12">
                    						<label for="email">Username</label>
                    						<input id="email" type="email" name="email" type="text" value="{{ old('email') }}" required autofocus/>
                    					</div>
                    				</div>
                                </div>
                            </div>

                    		<div class="row login__form-row">
                    			<div class="col-md-offset-1 col-md-10">
                    				<div class="row login__form-row">
                    					<div class="col-xs-12">
                    						<label for="password">Password</label>
                    						<input id="password" type="password" name="password" type="text" required/>
                    					</div>
                    				</div>
                                </div>
                            </div>

                            <div class="row login__form-row">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </form>

                    		<div class="row login__form-row">
                                <div class="col-md-5 col-md-offset-1">
            						<input class="cta cta--primary rounded" type="submit" value="Submit" />
                                </div>
                                <div class="col-md-5">
            						<a class="cta cta--secondary rounded text-center" href="{{ route('password.request') }}">Forgot Password</a>
                                </div>
                            </div>

                            {{-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> --}}

                            {{-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> --}}

                            {{-- <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
