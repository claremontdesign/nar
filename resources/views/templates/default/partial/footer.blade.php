@section('body_bottom')
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#invitefriend').click(function(e){
			e.preventDefault();
			window.location = '<?php echo cd_route('invite')?>';
		});
	});
</script>
@append
<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">


	<div class="footer-widgets-bottom">
		<div class="container">
			<div class="footer-widgets-bottom-inner">
				<div class="row">

					<div class="col-md-3 col-sm-6 col-xs-12">
						<aside id="text-2" class="widget widget_text"><h4 class="widget-title">MATURAL HOME RUGS</h4>
							<div class="textwidget">
								<ul>
									<li><a href="{{ cd_route('about-us') }}">About Us</a></li>
									<li><a href="{{ cd_route('customer-assistance') }}">Customer Assistance</a></li>
									<li><a href="{{ cd_route('testimonials') }}">Testimonials</a></li>
									<li><a href="{{ cd_route('image-gallery') }}">Image Gallery</a></li>
									<li><a href="{{ cd_route('new-arrivals') }}">New Arrivals</a></li>
									<li><a href="{{ cd_route('info') }}#PriceMatch">Satisfaction Guarantee</a></li>
								</ul>
							</div>
						</aside>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12">
						<aside id="text-3" class="widget widget_text"><h4 class="widget-title">SUPPORT</h4>
							<div class="textwidget">
								<ul>
									<li><a href="{{ cd_route('info') }}#Shipping">Shipping & Delivery</li>
									<li><a href="{{ cd_route('info') }}#ReturnPolicy">Return Policy</li>
									<li><a href="{{ cd_route('faq') }}">FAQ</li>
									<li><a href="{{ cd_route('affiliate-program') }}#PriceMatch">Affiliate Program</li>
									<li><a href="{{ cd_route('events-promotions') }}">Events & Promotions</li>
								</ul>
							</div>
						</aside>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12">
						<aside id="text-4" class="widget widget_text"><h4 class="widget-title">READ</h4>
							<div class="textwidget">
								<ul>
									<li><a href="{{ cd_route('info') }}">Rug Care</a></li>
									<li><a href="{{ cd_route('earth-friendly') }}">Earth Friendly Area Rugs</a></li>
									<li><a href="{{ cd_route('rugs-101') }}">Articles on Area Rugs</a></li>
									<li><a href="{{ cd_route('why-buy') }}">Why Buy From NHR</a></li>
									<li><a href="{{ cd_route('blog') }}">Blog</a></li>
								</ul>
							</div>
						</aside>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12">
						<aside id="text-5" class="widget widget_text"><h4 class="widget-title">OTHER LINKS</h4>
							<div class="textwidget">
								<ul>
									<li><a href="{{ cd_route('sitemap') }}">Site Map</a></li>
									<li><a href="{{ cd_route('search') }}">Advanced Search</a></li>
									<li><a href="{{ cd_route('info') }}#PrivacyPolicy">Privacy Policy</a></li>
									<li><a href="{{ cd_route('legal-notice') }}">Legal Notice</a></li>
								</ul>
							</div>
						</aside>
					</div>

				</div>
			</div>
		</div>
	</div>


	<!--.start-newsletter-->
	<div class="footer-credit" style="background-color:#464646;padding-bottom:0;">
		<div class="container">
			<div class="copyright" style="border-top:0px;">
				<div class="row">

					<div class="footer-credit-left col-md-9 col-lg-6" style="border:solid 0px #fff;">
						<h3 style="padding:0;margin:0;">Email Newsletter Here</h3>

						<p class="email-newsletter">
							Sign Up and SAVE $30 on First Order! (<a href="#">See Details</a>)<br/>
							{!! view(cd_narbase_view_name('subscribe.partial.form'), compact('subscribe')) !!}
						</p>
					</div>

					<div class="footer-credit-left col-md-3 col-lg-6" style="border:solid 0px #fff;">
						<h3 style="padding:0;margin:0;">Refer a friend to earn a special discount!</h3><br/>
						<p class="email-newsletter">
							<input id="invitefriend" type="submit" name="Invite A Friend" value="Invite A Friend" style="background-color:#70a3ed;color:#fff;">
						</p>
					</div>

				</div>
			</div>
		</div>
	</div><!--.footer-newsletter-->

	<div class="footer-credit" style="background-color:#292929;padding-bottom:0;">
		<div class="container">
			<div class="copyright" style="border-top:0px;">
				<div class="row">
					<div><p style="text-align:center;">&copy; <?php echo date('Y')?> Natural Home Rugs. All Rights Reserved.</p></div>
				</div>
			</div>
		</div>
	</div><!--.footer-credit-->



</footer>