@extends('layouts.master')
<?php $titlePost = htmlspecialchars($post->title); ?>
@section('head.title', $titlePost)
@section('content')
<div class="row">
	<div class="col-md-9">
		<article class="post single-post clearfix">
			<div class="post-inner">
				<h2 class="post-title"><span class="post-type"><i class="fa fa-bookmark-o"></i></span>{!! $post->title !!}</h2>
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
					{!! $post->body !!}
				</div><!-- End post-content -->
				<div class="clearfix"></div>
				
			</div><!-- End post-inner -->
		</article><!-- End article.post -->
		<div class="clearfix"></div>
		<div class="tabs-warp question-tab">
			<ul class="custom-tab">
				<li class="tab"><a href="#" class="current">Related Post</a></li>
			</ul>
			<div class="row">
				@foreach($related_posts as $r_post)
			
					<div class="col-md-4">
						<div class="tab-inner-warp">
							<div class="tab-inner random-question">
								<article class="question question-type-normal">
									<a href="{!! route('post.show', $r_post->slug) !!}">
										<img src="http://laravelcode.com/upload/postimages/show-image-preview-before-upload.png" class="img-respinsive" alt="{!! $r_post->title !!}">
										<h4 class="title" align="center" style = "height: 80px;">
											{!! substr($r_post->title, 0, 80) !!}
											{!! strlen($r_post->title) > 80 ? '...' : '' !!}
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
