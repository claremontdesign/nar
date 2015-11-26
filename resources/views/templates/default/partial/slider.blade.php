@section('body_bottom')
<!-- TokoPress JavaScript -->
<script type="text/javascript">
	jQuery(function($) {
		$('.toko-slider-active').owlCarousel({items: 1, loop: true, nav: false, lazyLoad: true, autoplay: true, autoplayHoverPause: true, dots: true, stopOnHover: true, animateOut: 'fadeOut'});
	});
</script>
@append
<div class="toko-slider-wrap">
	<div class="toko-slides toko-slider-active owl-carousel owl-theme owl-loaded">
		<div class="toko-slide" style="background-image:url(http://dev.naturalarearugs.com/wp/wp-content/uploads/2015/06/slide-sisal-rugs.jpg);background-size:cover;background-position:center right;background-repeat:no-repeat;" >
			<div class="toko-slide-inner">
				<div class="toko-slide-detail">
					<p class="toko-slide-desc">
						<a href="#">
							<img src="http://dev.naturalarearugs.com/wp/wp-content/uploads/2015/10/slide-btn-shop-sisal.png">
						</a>
					</p>
				</div>
			</div>
		</div>
		<div class="toko-slide" style="background-image:url(http://dev.naturalarearugs.com/wp/wp-content/uploads/2015/06/slide-seagrass-rugs.jpg);background-size:cover;background-position:center right;background-repeat:no-repeat;" >
			<div class="toko-slide-inner">
				<div class="toko-slide-detail">
					<p class="toko-slide-desc">
						<a href="#">
							<img src="http://dev.naturalarearugs.com/wp/wp-content/uploads/2015/10/slide-btn-shop-seagrass.png">
						</a>
					</p>
				</div>
			</div>
		</div>
		<div class="toko-slide" style="background-image:url(http://dev.naturalarearugs.com/wp/wp-content/uploads/2015/10/slide-jute-rugs.jpg);background-size:cover;background-position:center right;background-repeat:no-repeat;" >
			<div class="toko-slide-inner">
				<div class="toko-slide-detail">
					<p class="toko-slide-desc">
						<a href="#">
							<img src="http://dev.naturalarearugs.com/wp/wp-content/uploads/2015/10/slide-btn-shop-jute.png">
						</a>
					</p>
				</div>
			</div>
		</div>
		<div class="toko-slide" style="background-image:url(http://dev.naturalarearugs.com/wp/wp-content/uploads/2015/06/slide-arrival-rugs.jpg);background-size:cover;background-position:center right;background-repeat:no-repeat;" >
			<div class="toko-slide-inner">
				<div class="toko-slide-detail">
					<p class="toko-slide-desc">
						<a href="#">
							<img src="http://dev.naturalarearugs.com/wp/wp-content/uploads/2015/10/slide-btn-shop-newarrival.jpg" style="margin-top:-100px;">
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>