@extends('layouts.master')
@section('head.title', 'Login Page')
@section('content')

<!-- Modal Login Form -->
<div class="col-md-9">
    <div class="col-md-8 col-md-offset-2">
        <div class="page-content">
            <h2>Register Now</h2>
            <div class="form-style form-style-3">
                <form>
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-inputs clearfix">
                        <p class="login-text">
                            <input type="text" placeholder="First Name" name="firstname">
                            <i class="fa fa-user-o"></i>
                        </p>
                        <p class="login-text">
                            <input type="text" placeholder="Last Name" name="lastname">
                            <i class="fa fa-user-o"></i>
                        </p>
                        <p class="login-text">
                            <input type="text" placeholder="Email" name="email">
                            <i class="fa fa-envelope"></i>
                        </p>
                        <p class="login-password">
                            <input type="password" placeholder="password" name="password">
                            <i class="fa fa-lock"></i>
                        </p>
                        <p class="login-password">
                            <input type="password" placeholder="Confirm Password" name="password_confirmation">
                            <i class="fa fa-lock"></i>
                        </p>
                    </div>
                    <p class="form-submit login-submit">
                        <input type="submit" value="Create an account" class="button color small login-submit submit">
                    </p>

                </form>
            </div>
        </div><!-- End page-content -->
    </div>
</div>
@endsection
