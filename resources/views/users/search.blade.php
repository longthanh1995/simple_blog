@extends('layouts.master')
@section('head.title', 'Searching')
@section('content')
<div class="row">
	<div class="col-md-9">
		<h3>Results for "{!! Request::input('query') !!}"</h3>

			@foreach($pos as $p)
				<p>{!! $pos->title !!}</p>
			@endforeach


</div><!-- End main -->
@include('partials.sidebar')
</div>
@endsection
