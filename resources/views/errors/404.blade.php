@extends('layouts.master')
@section('head.title', 'Page Not Found')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="error_404">
			<div>
				<h2>404</h2>
				<h3>Page not Found</h3>
			</div>
			<div class="clearfix"></div><br>
			<a href="{!! url('/') !!}" class="button large color margin_0">Home Page</a>
		</div>
	</div>
</div>
@endsection