@extends('layouts.master')
@section('head.title', 'All Tags')
@section('head.css')
	<style>
		.tag-mockup-label {
			width: 45px;
			height: 45px;
			position: relative;
			top: -5px;
			right: -35px;
			z-index: 1;
		}
		.posts_count {
			position: relative;
			right: -63px;
			top: -5px;
			color: #ff7361;
			z-index: 10;
		}
	</style>
@endsection
@section('content')
<div class="row">
	<div class="col-md-9">
		<div class="row">
			@foreach($tags as $tag)
			<div class="col-md-3">
				<a href="{!! route('tag.show', strtolower($tag->name)) !!}" class="button medium green-button tag-label">{!! $tag->name !!}
					<span class="posts_count">{!! $tag->posts()->count() !!}</span>
					<img src="{!! asset('image/mockup.png') !!}" alt="mockup-label" class="tag-mockup-label">
				</a>
			</div>
			@endforeach
		</div>
	</div><!-- End main -->
	@include('partials.sidebar')
</div>
@endsection
