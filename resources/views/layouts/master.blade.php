<!DOCTYPE html>
<head>
	@include('partials.head')
</head>
<body>
	<div id="wrap">
		<section class="container main-content">
			@include('partials.nav')
			@include('partials.breadcrumb')
			@yield('content')
		</section>
		@include('partials.footer')
	</div>
	<div class="go-up"><i class="icon-chevron-up"></i></div>
	@include('partials.javascript')
	@yield('js')
</body>
</html>