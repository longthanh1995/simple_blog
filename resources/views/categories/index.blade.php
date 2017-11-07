@extends('layouts.master')
@section('head.title', 'All Categories')
@section('content')
<div class="row">
	<div class="col-md-9">
		<div class="col-md-4">
			<div class="all_cats">
				<img src="{!! url('image/angular.png') !!}" alt="angular">
				<a href="#">ANGULAR</a>
			</div>
		</div>
	</div><!-- End main -->
    @include('partials.sidebar')
</div>
@endsection
