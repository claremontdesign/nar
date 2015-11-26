@extends(cd_nar_template())
@section('body_class', 'home page page-id-701 page-template page-template-page_visual_composer page-template-page_visual_composer-php header-large ltr wpb-js-composer js-comp-ver-4.7.2 vc_responsive')
@section('meta_title', 'Natural Home Rugs')
@section('meta_keywords', '')
@section('meta_description', '')
@section('body_bottom')
<!-- TokoPress JavaScript -->
<script type="text/javascript">
	jQuery(function($) {
		$('.toko-slider-active').owlCarousel({items: 1, loop: true, nav: false, lazyLoad: true, autoplay: true, autoplayHoverPause: true, dots: true, stopOnHover: true, animateOut: 'fadeOut'});
	});
</script>
@append
@section('content')
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<article id="post-701" class="post-701 page type-page status-publish entry">
					<div class="entry-content">
						<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1439536789991 vc_row-no-padding" style="position: relative; left: -416.5px; box-sizing: border-box; width: 1903px;">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="wpb_wrapper">
									{!! view(cd_nar_view_name('partial.slider')) !!}
								</div>
							</div>
						</div>
						<div class="vc_row-full-width"></div>
						{!! view(cd_nar_view_name('rugfinder.partial.form'), compact('rugfinder')) !!}
						<div class="vc_row wpb_row vc_row-fluid vc_custom_1446037910937">
							<div class="wpb_column vc_column_container vc_col-sm-4 vc_custom_1439734046393">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element  vc_custom_1446037861039">
										<div class="wpb_wrapper">
											<p>
												<a href="#">
													<img src="http://dev.naturalhomerugs.com/wpdev/wp-content/uploads/2015/10/home-body-boxes-421x351.jpg" alt="" width="100%">
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-4">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element  vc_custom_1446037868781">
										<div class="wpb_wrapper">
											<p>
												<a href="#">
													<img src="http://dev.naturalhomerugs.com/wpdev/wp-content/uploads/2015/10/home-body-boxes-421x351.jpg" alt="" width="100%">
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-4">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<p>
												<a href="#">
													<img src="http://dev.naturalhomerugs.com/wpdev/wp-content/uploads/2015/10/home-body-boxes-421x351.jpg" alt="" width="100%">
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_row wpb_row vc_row-fluid vc_custom_1446037904748">
							<div class="wpb_column vc_column_container vc_col-sm-6 vc_custom_1439734046393">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<p>
												<a href="#">
													<img src="http://dev.naturalhomerugs.com/wpdev/wp-content/uploads/2015/10/home-body-boxes-647x351.jpg" alt="" width="100%">
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-6">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<p>
												<a href="#">
													<img src="http://dev.naturalhomerugs.com/wpdev/wp-content/uploads/2015/10/home-body-boxes-647x351.jpg" alt="" width="100%">
												</a>
											</p>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_row wpb_row vc_row-fluid vc_custom_1446037898280">
							<div class="wpb_column vc_column_container vc_col-sm-8 vc_custom_1439734046393">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<p>
												<a href="#">
													<img src="http://dev.naturalhomerugs.com/wpdev/wp-content/uploads/2015/10/home-body-boxes-872x351.jpg" alt="" width="100%">
												</a>
											</p>

										</div>
									</div>
								</div></div><div class="wpb_column vc_column_container vc_col-sm-4">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<p>
												<a href="#">
													<img src="http://dev.naturalhomerugs.com/wpdev/wp-content/uploads/2015/10/home-body-boxes-421x351.jpg" alt="" width="100%">
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						{!! view(cd_nar_view_name('partial.socialicons')) !!}
					</div>
				</article>
			</div>
		</div>
	</div>
</div>

@stop