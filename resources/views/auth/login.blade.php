@extends('layouts.master')
@section('head.title', 'Login Page')
@section('content')

<!-- Modal Login Form -->
<div class="col-md-9">
	<div class="col-md-8 col-md-offset-2">
		@include('partials.message')
		<div class="page-content" id="login-panel">
			<h2>Login</h2>
			<div class="form-style form-style-3">
				<form method="POST" action="#">
		
					<div class="form-inputs clearfix">
						<p class="login-text">
							<input type="email" placeholder="Email" name="email">
							<i class="fa fa-envelope"></i>
						</p>
						<p class="login-password">
							<input type="password" placeholder="Password" name="password">
							<i class="fa fa-lock"></i>
							<a href="#">Forget</a>
						</p>
					</div>
					<p class="form-submit login-submit">
						<input type="submit" value="Log in" class="button color small login-submit submit">
					</p>
					<div class="rememberme">
						<label><input type="checkbox" checked="checked"> Remember Me</label>
					</div>
				</form>
				<ul class="login-links login-links-r">
					<li><a href="{!! url('register') !!}">Register</a></li>
				</ul>
			</div>
		</div>
	</div>
</div><!-- End page-content -->
@endsection
@section('js')

@endsection