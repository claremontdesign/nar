<header class="site-header">
	<div class="header-topnav">
		<div class="container">
			<div class="row">
				<div class="col-md-5 hidden-xs hidden-sm">
				</div>
				<div class="col-md-7">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<span class="topnav-label hidden-xs">
								<a href="{{ route('contact-us') }}">Contact Us</a>
								<span>|</span>
								<a href="{{ route('about-us') }}">About Us</a>
								<span>
								<!--Sign In/Register-->
							</span>
							</a>
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
									Natural Home Rugs
								</div>
								<p class="site-tagline">Inspired by Nature</p>
							</a>
						</div>
					</div>

					<div class="col-md-9 col-lg-6">
						<div class="search-box">
							<div class="contact"><img src="http://dev.naturalhomerugs.com/wpdev/wp-content/uploads/2015/10/icon-phone.jpg" width="15"> 1.800.601.6021</div>
							<div class="search">
								{!! view(cd_narbase_view_name('product.partial.searchform')) !!}
							</div>
							<div class="shipping"><span class="free">FREE & FAST SHIPPING</span> | EASY RETURNS</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="navbar-collapse collapse navbar-collapse-top">

						{!! view(cd_nar_view_name('partial.nav')) !!}

					</div>
				</div>
			</div>
		</div>
	</nav>
</header>