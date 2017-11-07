@extends('layouts.master')
<?php $titleTag = htmlspecialchars($tag->name); ?>
@section('head.title', $titleTag.' Tag')
@section('content')
<div class="row">
	<div class="col-md-9">

		@foreach($tag->posts as $post)
			<article class="post single-post clearfix">
				<div class="post-inner">
					<h2 class="post-title"><a href="{!! route('post.show', $post->slug) !!}"><span class="post-type"><i class="fa fa-bookmark-o"></i></span>{!! $post->title !!}</a></h2>
					<div class="post-meta">
						<span class="meta-author">
							<i class="fa fa-user"></i>
							<a href="#">By : Laravelcode</a>
						</span>
						<span class="meta-date">
							<i class="fa fa-calendar"></i>
							{!! date('M j, Y', strtotime($post->updated_at)) !!}
						</span>
						<span class="meta-categories">
							<i class="fa fa-reorder"></i>
							{!! $post->category->name !!}
						</span>
						<span class="meta-comment pl10">
							<i class="fa fa-eye"></i>
							1731 views
						</span>
						<span class="meta-comment pl10">
							<i class="fa fa-comment-o"></i>
							1731 views
						</span>
					</div>
					<div class="post-content">
						{!! substr($post->body, 0, 400) !!}
						{!! strlen($post->body) > 400 ? "..." : ""  !!}
						<hr>
						<br>
						<a href="{!! url('post/'.$post->slug) !!}" class="post-read-more button color small">Continue reading</a>
					</div><!-- End post-content -->
					<div class="clearfix"></div>

				</div><!-- End post-inner -->
			</article><!-- End article.post -->
		@endforeach

		<div class="row center">
			{{-- {!! $posts_per_page->links() !!} --}}
		</div>
		<div class="post-next-prev clearfix">
			<p class="prev-post">
				<a href="#"><i class="icon-double-angle-left"></i>&nbsp;Prev post</a>
			</p>
			<p class="next-post">
				<a href="#">Next post&nbsp;<i class="icon-double-angle-right"></i></a>                                
			</p>
		</div><!-- End post-next-prev -->

		<div class="clearfix"></div>
		<!-- Start Random Post -->
		<div class="tabs-warp question-tab">
			<ul class="custom-tab">
				<li class="tab"><a href="#" class="current">Related Posts</a></li>
			</ul>
			<div class="row">
				@foreach($related_posts as $post)
				<div class="col-md-4">
					<div class="tab-inner-warp">
						<div class="tab-inner random-question">
							<article class="question question-type-normal">
								<a href="{!! route('post.show', $post->slug) !!}">
									<img src="http://laravelcode.com/upload/postimages/show-image-preview-before-upload.png" class="img-respinsive" alt="Show Image Preview Before Upload In jQuery Bootstrap Example">
									<h4 class="title">
										{!! $post->title !!}
									</h4>
								</a>
							</article>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>				
	</div><!-- End main -->		
	@include('partials.sidebar')
</div>
@endsection
