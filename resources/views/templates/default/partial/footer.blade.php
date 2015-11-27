<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

	<div class="footer-widgets-bottom">
		<div class="container">
			<div class="footer-widgets-bottom-inner">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<aside id="text-2" class="widget widget_text">
							<h4 class="widget-title">EMAIL NEWSLETTER HERE</h4>
							<div class="textwidget">
								<div class="email-newsletter">
									Sign Up and SAVE $30<br/>on First Order! (<a href="#">See Details</a>)<br/>
									{!! view(cd_narbase_view_name('subscribe.partial.form'), compact('subscribe')) !!}
								</div>
								<div class="email-newsletter">
									Refer a friend <br>to earn a special discount!
									{!! view(cd_nar_view_name('invite.partial.form')) !!}
								</div>
							</div>
						</aside>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12">
						<aside id="text-2" class="widget widget_text"><h4 class="widget-title">NATURAL AREA RUGS</h4>
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

	<div class="footer-credit">
		<div class="container">
			<div class="copyright">
				<div class="row">
					<div class="footer-credit-left col-md-6 col-xs-12">
						<p>&copy; <?php echo date('Y') ?> Natural Area Rugs. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>