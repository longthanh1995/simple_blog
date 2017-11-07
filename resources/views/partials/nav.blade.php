<!-- Start header-top -->
<div id="header-top">
<section class="container clearfix">
	<nav class="header-top-nav">
		<ul>
			<li><a href="{!! route('getContact') !!}"><i class="fa fa-envelope" aria-hidden="true"></i>Contact</a></li>
			@if(Auth::check()) 
				<li><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i>{!! Auth::user()->name !!}</a></li>
				<li><a href="{!! route('logout') !!}"><i class="fa fa-lock" aria-hidden="true"></i>Logout</a></li>
			@else 
				<li><a href="javascript:void(0)" onclick="document.getElementById('login_modal').style.display='block'" id="login_form"><i class="fa fa-user"></i>Login</a></li>
			@endif
		</ul>
	</nav>
	<div class="header-search">
		<form action="{!! route('search.results') !!}" method="GET">
			<input type="text" placeholder ="Search here ..." name="query" />
			<button type="submit" class="search-submit"></button>
		</form>
	</div>
</section><!-- End container -->
</div>        <!-- End header-top -->

<!-- Start header -->
<header id="header">
<section class="container clearfix">
	<div class="logo">
		<a href="{!! route('home') !!}">
			<img alt="" src="{!! asset('image/site_logo.png') !!}">
		</a>
	</div>
	<nav class="navigation">
		<ul>
			<li class="{!! Request::is('/') ? 'active' : '' !!}"><a href="{!! route('home') !!}">Home</a></li>
			<li class="{!! Request::is('tags') ? 'active' : '' !!}"><a href="{!! route('tags.getTags') !!}">Tags</a></li>
			<li class="{!! Request::is('categories') ? 'active' : '' !!}"><a href="{!! route('categories.getCats') !!}">Categories</a></li>
			<li class="{!! Request::is('forum') ? 'active' : '' !!}"><a href="{!! route('forum.getForum') !!}" id="forum_page">Forum</a></li>
			<li class="{!! Request::is('contact-us') ? 'active' : '' !!}"><a href="{!! route('getContact') !!}">Contact Us</a></li>
		</ul>
	</nav>
</section><!-- End container -->
</header>        <!-- End header -->
<!--LOGIN MODAL-->
<div id="login_modal" class="modal">
<form class="modal-content animate" id="login_frm">
	<div class="imgcontainer">
		<span onclick="document.getElementById('login_modal').style.display='none'" class="close" title="Close Modal">&times;</span>
		<img src="{!! asset('image/login_avatar.png') !!}" alt="Login Avatar" class="avatar">
	</div>

	<div class="container" id="login_container">
		<div class="print_error_msg_login" style = "display: none;">
			<span class="closebtn">&times;</span> 
			<ul></ul>
		</div>
		<label><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" id ="email" required value="{!! Request::old('email') ? : '' !!}">

		<label><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="password" id="password" required value="{!! Request::old('password') ? : '' !!}">

		<button type="submit" id="login_btn">Login</button>
		<input type="checkbox" checked="checked" name="remember_me"> Remember me
		<a href="javascript:void(0)" onclick="document.getElementById('signup_modal').style.display='block'" style="width:auto;" id="signup_form">Sign Up</a>
	</div>

	<div class="container" style="background-color:#f1f1f1">
		<button type="button" onclick="document.getElementById('login_modal').style.display='none'" class="cancelbtn">Cancel</button>
		<span class="psw">Forgot <a href="#" style = "color: #f44336;">password?</a></span>
	</div>
</form>
</div>

<!--SIGN UP MODAL-->
<div id="signup_modal" class="modal">
<span onclick="document.getElementById('signup_modal').style.display='none'" class="close" title="Close Modal">×</span>
<form class="modal-content animate" id="signup_frm">
	<div class="container" id="signup_container">
		<div class="print_error_msg" style = "display: none;">
			<span class="closebtn">&times;</span> 
			<ul></ul>
		</div>
		{{-- <div id="print_err_msg">
			<span class="closebtn">&times;</span>  
			<strong>Error!</strong> Please enter all fields in this form
		</div> --}}
		<label><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="username" id="username" required value="{!! Request::old('username') ? : '' !!}">
		<div id="msg_check_usr">
			<p id="usr_field" class="invalid">Username must be at least <b>6 letters</b> </p>
		</div>
		<label><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" id="email" required value="{!! Request::old('email') ? : '' !!}">

		<label><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="password" id="password" required value="{!! Request::old('password') ? : '' !!}">
		
		<!-- SHOW MSG_CHECK_PASS -->
		<div id="msg_check_pass">
			<h5><i class="fa fa-bell-o"></i>Password must contain the following:</h5>
			<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
			{{-- <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p> --}}
			<p id="number" class="invalid">A <b>number</b></p>
			<p id="length" class="invalid">Minimum <b>8 characters</b></p>
		</div>
		{{-- <label><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" name="pass_confirm" id="pass_confirm" required> --}}
			<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

			<div class="clearfix">
				<button type="button" onclick="document.getElementById('signup_modal').style.display='none'" class="cancelbtn" id="cancel_signup">Cancel</button>
				<button type="submit" id="signup_btn">Sign Up</button>
			</div>
		</div>
	</form>
</div>

