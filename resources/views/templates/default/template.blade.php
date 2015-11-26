<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('meta_title')</title>
		<meta name="description" content="@yield('meta_description')">
		<meta name="keywords" content="@yield('meta_keywords')">
		@yield('head')

		<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='{{ cd_nar_asset() }}/woocommerce/assets/css/prettyPhoto.css' type='text/css' media='all' />
		<link rel='stylesheet' id='woocommerce-layout-css'  href='{{ cd_nar_asset() }}/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
		<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='{{ cd_nar_asset() }}/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
		<link rel='stylesheet' id='woocommerce-general-css'  href='{{ cd_nar_asset() }}/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
		<link rel='stylesheet' id='toko-google-fonts-css'  href='//fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7CPlayfair+Display%3A400%2C700&#038;ver=1.0.0' type='text/css' media='all' />
		<script type='text/javascript' src='{{ cd_nar_asset('js/jquery.js') }}'></script>
		<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http:{{ cd_nar_asset('plugins') }}/js_composer/assets/css/vc_lte_ie9.css" media="screen"><![endif]--><!--[if IE  8]><link rel="stylesheet" type="text/css" href="http:{{ cd_nar_asset('plugins') }}/js_composer/assets/css/vc-ie8.css" media="screen"><![endif]--><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1439536789991{margin-bottom: 0px !important;background-color: #ffffff !important;}.vc_custom_1445794486736{margin-top: 40px !important;}.vc_custom_1445272615933{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 30px !important;padding-bottom: 0px !important;background-color: #f5f5f5 !important;}.vc_custom_1445272551861{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f5f5f5 !important;}.vc_custom_1445272560669{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f5f5f5 !important;}.vc_custom_1439734046393{padding-bottom: 30px !important;}.vc_custom_1439734046393{padding-bottom: 30px !important;}.vc_custom_1439734046393{padding-bottom: 30px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
		<link href='//fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

		<link rel='stylesheet' id='toko-style-css'  href='{{ cd_nar_asset('css/all.css') }}' type='text/css' media='all' />
		<link rel='stylesheet' id='toko-style-css'  href='{{ cd_nar_asset('css/nar.css') }}' type='text/css' media='all' />
		@yield('head_bottom')
	</head>
	<body class="@yield('body_class')">
		<div class="site-container">
			{!! view(cd_nar_view_name('partial.header')) !!}
			<div class="main-content @yield('main_content_class')">
				<div class="container">
					{!! cd_display_errors() !!}
					{!! cd_display_msgs() !!}
					<!-- CONTENT -->
					@yield('content')
					<!-- CONTENT -->
				</div>
			</div>
			{!! view(cd_nar_view_name('partial.footer')) !!}
		</div><!-- div.site-container -->
		<script type='text/javascript' src='{{ asset('assets/claremontdesign/cdbase/js/cdbase.js') }}'></script>
		<script type='text/javascript' src='{{ cd_nar_asset('js/all.js') }}'></script>
		@yield('body_bottom')
	</body>
</html>
