@extends('layouts.master')
@section('head.title', 'All Categories')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="contact-us">
				<div class="col-md-12">
					<div class="page-content">
						<iframe height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Rajkot,+Gujarat,+India&amp;hl=en&amp;sll=22.2734719,70.7510839&amp;sspn=22.2734719,70.7510839&amp;hnear=Egypt&amp;t=m&amp;z=8&amp;output=embed"></iframe>
					</div><!-- End page-content -->
				</div>
				<div class="col-md-7">
					<div class="page-content">
						<h2>Say hello !</h2>
						<p>If you have any question about any topic or if you suggest me your any suggetion regarding our site functionality, tutorials and any other topic related please kindlly contact us. We always reply back. Thanks!!</p>
						<form class="form-style form-style-3 form-style-5">
							<div class="form-inputs clearfix">
								<p>
									<label class="required">Name<span>*</span></label>
									<input type="text" value="" aria-required="true">
								</p>
								<p>
									<label class="required">E-Mail<span>*</span></label>
									<input type="text" value="" aria-required="true">
								</p>
							</div>
							<div class="form-textarea">
								<p>
									<label class="required">Message<span>*</span></label>
									<textarea aria-required="true" cols="58" rows="7"></textarea>
								</p>
							</div>
							<p class="form-submit">
								<input name="submit" type="submit" class="submit button small color" value="Send">
							</p>
						</form>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-5">
					<div class="page-content">
						<h2>About Us</h2>
						<p>In our blog, We'll share knowledge about easy things in our life such as real estate, stock and bond, mutual funds, ...</p>
						<div class="widget widget_contact">
							<ul>
								<li><i class="fa fa-map-marker"></i>Address :<p>Laravelcode, Rajkot, India.</p></li>
								<li><i class="fa fa-phone"></i>Phone number :<p>(+91)9898165255</p></li>
								<li><i class="fa fa-envelope"></i>E-mail :<p>laravelcode@gmail.com</p></li>
								<li>
									<i class="fa fa-share"></i>Social links :
									<ul id="social_links">
										<li><a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://youtube.com" target="_blank"><i class="fa fa-youtube"></i></a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div><!-- End contact-us -->
		</div><!-- End row -->	
	</div><!-- End main -->
</div>
@endsection