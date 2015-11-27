<header class="site-header">
	<div class="header-topnav">
		<div class="container">
			<div class="row">
				<div class="col-md-5 hidden-xs hidden-sm">
					<!--
					<span class="welcome-message">...Welcome...</span>                -->
				</div>
				<div class="col-md-7">
					<ul class="nav navbar-nav navbar-right sm" data-smartmenus-id="14485146681736191">
						<li class="dropdown">
							<span class="topnav-label hidden-xs">
                                                                <a href="#">ORDER TRACKING</a>
                                                                <span>|</span>
                                                                <a href="#">BLOG</a>
                                                                <span>|</span>
                                                                <a href="#">MY ACCOUNT</a>
                                                                <span>|</span>
                                                                <a href="#">SHOPPING CART</a>
                                                                <span>|</span>
								<a href="{{ cd_route('contact-us') }}">Contact Us</a>
								<span>|</span>
								<a href="{{ cd_route('about-us') }}">About Us</a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div> <!-- top header -->
	<nav class="site-navigation navbar navbar-default " role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
		<div class="container">
			<div class="header-block">
				<div class="row">
					<div class="col-md-3 col-lg-6">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle navbar-icon toggle-menu" data-toggle="collapse" data-target=".site-navigation .navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<i class="fa fa-navicon"></i>
							</button>
							<a class="navbar-brand" href="{{ route('home') }}">
								<div class="site-with-text">
									Natural Area Rugs
								</div>
								<p class="site-tagline">WORLD'S FINEST NATURAL RUGS</p>
							</a>
						</div>
					</div>
					<div class="col-md-9 col-lg-6">
						<div class="search-box">
							<div class="contact"><img src="{{ cd_nar_asset('images/icons/') }}icon-phone.jpg" width="15"> 1.800.601.6021</div>
							<div class="search">
								{!! view(cd_narbase_view_name('product.partial.searchform')) !!}
							</div>
							<div class="shipping"><span class="free">FREE &amp; FAST SHIPPING</span> | EASY RETURNS</div>
						</div>
					</div>
				</div>
				<div class="row">
					{!! view(cd_nar_view_name('partial.nav')) !!}
				</div>
			</div>

		</div>
	</nav>
</header>