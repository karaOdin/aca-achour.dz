<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Auto Club</title>

		<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

		<link href="/css/master.css" rel="stylesheet">

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="/assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color1.css" title="color1" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color2.css" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color3.css" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color4.css" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color5.css" title="color5" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color6.css" title="color6" media="all" />

		<!--[if lt IE 9]>
		<script src="///oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="///oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body class="m-detail" data-scrolling-animations="true" data-equal-height=".b-auto__main-item">

		<!-- Loader -->
		<div id="page-preloader"><span class="spinner"></span></div>
		<!-- Loader end -->
		<!-- Start Switcher -->
		<div class="switcher-wrapper">	
			<div class="demo_changer">
				<div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
				<div class="form_holder">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="predefined_styles">
								<div class="skin-theme-switcher">
									<h4>Color</h4>
									<a href="/#" data-switchcolor="color1" class="styleswitch" style="background-color:#f76d2b;"> </a>
									<a href="/#" data-switchcolor="color2" class="styleswitch" style="background-color:#de483d;"> </a>
									<a href="/#" data-switchcolor="color3" class="styleswitch" style="background-color:#228dcb;"> </a>
									<a href="/#" data-switchcolor="color4" class="styleswitch" style="background-color:#00bff3;"> </a>
									<a href="/#" data-switchcolor="color5" class="styleswitch" style="background-color:#2dcc70;"> </a>
									<a href="/#" data-switchcolor="color6" class="styleswitch" style="background-color:#6054c2;"> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Switcher -->
		<section class="b-modal">
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Video</h4>
						</div>
						<div class="modal-body">
							<iframe width="560" height="315" src="/https://www.youtube.com/embed/a_ugz7GoHwY" allowfullscreen></iframe>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</section><!--b-modal-->
		<header class="b-topBar wow slideInDown" data-wow-delay="0.7s">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-6">
                        <div class="b-topBar__addr">
                            <span class="fa fa-map-marker"></span>
                            Cité Elhebal Local N° 03, Hammam Dalaa.
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="b-topBar__tel">
                            <span class="fa fa-phone"></span>
                            +213 561 66 54 40 
                        </div>
                    </div>
					
				</div>
			</div>
		</header><!--b-topBar-->

		<nav class="b-nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-4">
                        <div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">
                            <h3><a href="home.html">Auto<span>Club</span></a></h3>
                            <h2><a href="home.html">AUTO DEALER TEMPLATE</a></h2>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-8">
                        <div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse navbar-main-slide" id="nav">
                                <ul class="navbar-nav-menu">
                                    <li >
                                        <a  href="/">Accueil</span></a>
                                        
                                    </li>
                                    
                                    <li><a href="{{url('about')}}">A Propos</a></li>
                                    <li><a href="article.html">Services</a></li>
                                    
                                    <li><a href="{{route('products.index')}}">Shop</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav><!--b-nav-->

		<section class="b-pageHeader">
			<div class="container">
				<h1 class="wow zoomInLeft" data-wow-delay="0.5s">Vehicle Details Page</h1>
			</div>
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow wow zoomInUp" data-wow-delay="0.5s">
			<div class="container">
				<a href="/home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="/listings.html" class="b-breadCumbs__page">Luxury Cars</a><span class="fa fa-angle-right"></span><a href="/listingsTwo.html" class="b-breadCumbs__page">Nissan</a><span class="fa fa-angle-right"></span><a href="/detail.html" class="b-breadCumbs__page m-active">Nissan Maxima</a>
			</div>
		</div><!--b-breadCumbs-->

		<div class="b-infoBar">
			<div class="container">
				<div class="row wow zoomInUp" data-wow-delay="0.5s">
					<div class="col-xs-3">
						<div class="b-infoBar__premium">Premium Listing</div>
					</div>
					<div class="col-xs-9">
						<div class="b-infoBar__btns">
							<a href="/#" class="btn m-btn m-infoBtn">SHARE THIS VEHICLE<span class="fa fa-angle-right"></span></a>
							<a href="/#" class="btn m-btn m-infoBtn">ADD TO FAVOURITES<span class="fa fa-angle-right"></span></a>
							<a href="/#" class="btn m-btn m-infoBtn">PRINT THIS PAGE<span class="fa fa-angle-right"></span></a>
							<a href="/#" class="btn m-btn m-infoBtn">DOWNLOAD MANUAL<span class="fa fa-angle-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div><!--b-infoBar-->

		<section class="b-detail s-shadow">
			<div class="container">
				<header class="b-detail__head s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
					<div class="row">
						<div class="col-sm-9 col-xs-12">
							<div class="b-detail__head-title">
								<h1>{{$product->name}}</h1>
								<h3>Fully Redesigned Upscale Midsize Car</h3>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12">
							<div class="b-detail__head-price">
								<div class="b-detail__head-price-num">$44,380</div>
								<p>Included Taxes &amp; Checkup</p>
							</div>
						</div>
					</div>
				</header>
				<div class="b-detail__main">
					<div class="row">
						<div class="col-md-8 col-xs-12">
							<div class="b-detail__main-info">
								<div class="b-detail__main-info-images wow zoomInUp" data-wow-delay="0.5s">
									<div class="row m-smallPadding">
										<div class="col-xs-10">
											<ul class="b-detail__main-info-images-big bxslider enable-bx-slider" data-pager-custom="#bx-pager" data-mode="horizontal" data-pager-slide="true" data-mode-pager="vertical" data-pager-qty="5">
												<li class="s-relative">                                        
													<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
													<img class="img-responsive center-block" src="/storage/{{$product->main_image}}" alt="nissan" />
												</li>
												<?php $bigImages = json_decode($product->mult_images); ?>
												@foreach($bigImages as $bigImage)
												<li class="s-relative">                                        
													<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
													<img class="img-responsive center-block" src="/storage/{{$bigImage}}" alt="nissan" />
												</li>
												@endforeach
												
											</ul>
										</div>
										<div class="col-xs-2 pagerSlider pagerVertical">
											<div class="b-detail__main-info-images-small" id="bx-pager">
												<a href="#" data-slide-index="0" class="b-detail__main-info-images-small-one">
													<img class="img-responsive" src="/storage/{{$product->main_image}}" alt="nissan" />
												</a>
												<?php 
													$smallImages = json_decode($product->mult_images);
													$pos=1; 
												?>
												@foreach($smallImages as $smallImage)
												<a href="#" data-slide-index="<?php print $pos++; ?>" class="b-detail__main-info-images-small-one">
													<img class="img-responsive" src="/storage/{{$smallImage}}" alt="nissan" />
												</a>
												@endforeach
												
											</div>
										</div>
									</div>
								</div>
								<div class="b-detail__main-info-characteristics wow zoomInUp" data-wow-delay="0.5s">
									<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-car"></span></div>
											<p>Brand New</p>
										</div>
										<div class="b-detail__main-info-characteristics-one-bottom">
											Status
										</div>
									</div>
									<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-trophy"></span></div>
											<p>5,000KM</p>
										</div>
										<div class="b-detail__main-info-characteristics-one-bottom">
											Warrenty
										</div>
									</div>
									<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-at"></span></div>
											<p>Auto</p>
										</div>
										<div class="b-detail__main-info-characteristics-one-bottom">
											Transmission
										</div>
									</div>
									<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-car"></span></div>
											<p>FWD</p>
										</div>
										<div class="b-detail__main-info-characteristics-one-bottom">
											Drivetrain
										</div>
									</div>
									<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-user"></span></div>
											<p>5</p>
										</div>
										<div class="b-detail__main-info-characteristics-one-bottom">
											Passangers
										</div>
									</div>
									<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-fire-extinguisher"></span></div>
											<p>10.8L</p>
										</div>
										<div class="b-detail__main-info-characteristics-one-bottom">
											In City
										</div>
									</div>
									<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa fa-fire-extinguisher"></span></div>
											<p>7.5L</p>
										</div>
										<div class="b-detail__main-info-characteristics-one-bottom">
											On Highway
										</div>
									</div>
								</div>
								<div class="b-detail__main-info-text wow zoomInUp" data-wow-delay="0.5s">
									<div class="b-detail__main-aside-about-form-links">
										<a href="/#" class="j-tab m-active s-lineDownCenter" data-to='#info1'>GENERAL INQUIRY</a>
										<a href="/#" class="j-tab" data-to='#info2'>SCHEDULE TEST DRIVE</a>
										<a href="/#" class="j-tab" data-to='#info3'>GENERAL INQUIRY</a>
										<a href="/#" class="j-tab" data-to='#info4'>SCHEDULE TEST DRIVE</a>
									</div>
									<div id="info1">
										<p>The 2016 Nissan Maxima is powered by a 3.5-liter V6 engine with 300 horsepower, 10 more than the engine in the outgoing
											model. A continuously variable transmission and front-wheel drive are standard in all models. Nissan expects the 2016 Maxima
											to return 22/30 mpg city/highway, which is an improvement over the previous model's EPA-estimated 19/26 mpg.</p>
										<p>
											The 2016 Nissan Maxima seats five and comes with a power-adjustable driver,seat, an eight-speaker audio system, Bluetooth,
											satellite radio, HD Radio, push-button start, a rearview camera, two USB ports, the NissanConnect infotainment system,
											navigation, an 8-inch color display screen and voice controls for phone, audio and navigation functions. Leather upholstery,
											heated and ventilated front seats, an 11-speaker Bose audio system, a 360-degree parking camera system, adaptive cruise
											control, blind spot warning, rear cross traffic alert, front and rear parking sensors and forward collision warning with automatic
											braking are available. The 2016 Nissan Maxima starts at $33,235 including destination fees.</p>
										<p>The full review of the 2016 Nissan Maxima is coming soon. In the meantime, you can see pictures, research prices or view and
											compare specs for the 2016 Nissan Maxima. If you, considering the 2014 Nissan Maxima, you can read our review.</p>
										<p>Vestibulum auctor lacinia nunc. Nunc ut turpis.Sed libero magna, fermentum viverra, egestas non, fermentum sed, elit. Aenean
											erat orci, mollis quis gravida sed, mollis a, quam. Integer fermentum neque egestas orci. Nunc posuere, felis sit amet faucibus
											convallis tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Donec quis quam in ante condimentum blan erdit.
											Integer et urna. Vestibulum nisl. Ut ante est, imperdiet dignissim eleifend sit amet lacinia tempor justo. Nunc ornare atm nibh.
											Fusce ut felis. </p>
										<p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
											faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
											nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
									</div>
									<div id="info2">
										<p>The full review of the 2016 Nissan Maxima is coming soon. In the meantime, you can see pictures, research prices or view and
											compare specs for the 2016 Nissan Maxima. If you‚considering the 2014 Nissan Maxima, you can read our review.</p>
										<p>Vestibulum auctor lacinia nunc. Nunc ut turpis.Sed libero magna, fermentum viverra, egestas non, fermentum sed, elit. Aenean
											erat orci, mollis quis gravida sed, mollis a, quam. Integer fermentum neque egestas orci. Nunc posuere, felis sit amet faucibus
											convallis tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Donec quis quam in ante condimentum blan erdit.
											Integer et urna. Vestibulum nisl. Ut ante est, imperdiet dignissim eleifend sit amet lacinia tempor justo. Nunc ornare atm nibh.
											Fusce ut felis. </p>
										<p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
											faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
											nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
									</div>
									<div id="info3">
										<p>Vestibulum auctor lacinia nunc. Nunc ut turpis.Sed libero magna, fermentum viverra, egestas non, fermentum sed, elit. Aenean
											erat orci, mollis quis gravida sed, mollis a, quam. Integer fermentum neque egestas orci. Nunc posuere, felis sit amet faucibus
											convallis tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Donec quis quam in ante condimentum blan erdit.
											Integer et urna. Vestibulum nisl. Ut ante est, imperdiet dignissim eleifend sit amet lacinia tempor justo. Nunc ornare atm nibh.
											Fusce ut felis. </p>
										<p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
											faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
											nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
									</div>
									<div id="info4">
										<p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
											faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
											nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
									</div>
								</div>
								<div class="b-detail__main-info-extra wow zoomInUp" data-wow-delay="0.5s">
									<h2 class="s-titleDet">EXTRA FEATURES</h2>
									<div class="row">
										<div class="col-xs-4">
											<ul>
												<li><span class="fa fa-check"></span>Security System</li>
												<li><span class="fa fa-check"></span>Air Conditioning</li>
												<li><span class="fa fa-check"></span>Alloy Wheels</li>
												<li><span class="fa fa-check"></span>Anti-Lock Brakes (ABS)</li>
												<li><span class="fa fa-check"></span>Anti-Theft</li>
												<li><span class="fa fa-check"></span>Anti-Starter</li>
											</ul>
										</div>
										<div class="col-xs-4">
											<ul>
												<li><span class="fa fa-check"></span>Dual Airbag</li>
												<li><span class="fa fa-check"></span>Intermittent Wipers</li>
												<li><span class="fa fa-check"></span>Keyless Entry</li>
												<li><span class="fa fa-check"></span>Power Mirrors</li>
												<li><span class="fa fa-check"></span>Power Seat</li>
												<li><span class="fa fa-check"></span>Power Steering</li>
											</ul>
										</div>
										<div class="col-xs-4">
											<ul>
												<li><span class="fa fa-check"></span>CD Player</li>
												<li><span class="fa fa-check"></span>Driver Side Airbag</li>
												<li><span class="fa fa-check"></span>Power Windows</li>
												<li><span class="fa fa-check"></span>Remote Start</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<aside class="b-detail__main-aside">
								<div class="b-detail__main-aside-desc wow zoomInUp" data-wow-delay="0.5s">
									<h2 class="s-titleDet">Description</h2>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Make</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Nissan</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Model</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Maxima</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Kilometres</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">39,000 km</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Body Type</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Sedan</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Style/trim</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">SV Premium</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Engine</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">V-6 cyl</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Drivetrain</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">EWD</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Transmission</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Dual-Clutch Automatic</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Exterior Color</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Dark Grey</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Interior color</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Jet Black</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Passangers/Doors</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">5 Passengers / 4 Doors</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Fuel Type</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">Gasoline Fue</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">City Fuel Economy </h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">10.8L/100km</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h4 class="b-detail__main-aside-desc-title">Hwy Fuel Economy</h4>
										</div>
										<div class="col-xs-6">
											<p class="b-detail__main-aside-desc-value">7.7L/100km</p>
										</div>
									</div>
								</div>
								<div class="b-detail__main-aside-about wow zoomInUp" data-wow-delay="0.5s">
									<h2 class="s-titleDet">INQUIRE ABOUT THIS VEHICLE</h2>
									<div class="b-detail__main-aside-about-call">
										<span class="fa fa-phone"></span>
										<div>1-888-378-4027</div>
										<p>Call the seller 24/7 and they would help you.</p>
									</div>
									<div class="b-detail__main-aside-about-seller">
										<p>Seller Info: <span>NissanCarDealer</span></p>
									</div>
									<div class="b-detail__main-aside-about-form">
										<div class="b-detail__main-aside-about-form-links">
											<a href="/#" class="j-tab m-active s-lineDownCenter" data-to='#form1'>GENERAL INQUIRY</a>
											<a href="/#" class="j-tab" data-to='#form2'>SCHEDULE TEST DRIVE</a>
										</div>
										<form id="form1" action="/" method="post">
											<input type="text" placeholder="YOUR NAME" value="" name="name" />
											<input type="email" placeholder="EMAIL ADDRESS" value="" name="email" />
											<input type="tel" placeholder="PHONE NO." value="" name="name" />
											<textarea name="text" placeholder="message"></textarea>
											<div><input type="checkbox" name="one" value="" /><label>Send me a copy of this message</label></div>
											<div><input type="checkbox" name="two" value="" /><label>Send me a copy of this message</label></div>
											<button type="submit" class="btn m-btn">SEND MESSAGE<span class="fa fa-angle-right"></span></button>
										</form>
										<form id="form2" action="/" method="post">
											<input type="text" placeholder="YOUR NAME" value="" name="name" />
											<textarea name="text" placeholder="message"></textarea>
											<div><input type="checkbox" name="one" value="" /><label>Send me a copy of this message</label></div>
											<div><input type="checkbox" name="two" value="" /><label>Send me a copy of this message</label></div>
											<button type="submit" class="btn m-btn">SEND MESSAGE<span class="fa fa-angle-right"></span></button>
										</form>
									</div>
								</div>
								<div class="b-detail__main-aside-payment wow zoomInUp" data-wow-delay="0.5s">
									<h2 class="s-titleDet">CAR PAYMENT CALCULATOR</h2>
									<div class="b-detail__main-aside-payment-form">
										<form action="/" method="post">
											<input type="text" placeholder="TOTAL VALUE/LOAN AMOUNT" value="" name="name" />
											<input type="text" placeholder="DOWN PAYMENT" value="" name="name" />
											<div class="s-relative">
												<select name="select" class="m-select">
													<option value="">LOAN TERM IN MONTHS</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
											<input type="text" placeholder="INTEREST RATE IN %" value="" name="name" />
											<button type="submit" class="btn m-btn">ESTIMATE PAYMENT<span class="fa fa-angle-right"></span></button>
										</form>
									</div>
									<div class="b-detail__main-aside-about-call">
										<span class="fa fa-calculator"></span>
										<div>$250 <p>PER MONTH</p></div>
										<p>Total Number of Payments: <span>50</span></p>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</section><!--b-detail-->

		<section class="b-related m-home">
			<div class="container">
				<h5 class="s-titleBg wow zoomInUp" data-wow-delay="0.5s">FIND OUT MORE</h5><br />
				<h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">RELATED VEHICLES ON SALE</h2>
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<div class="b-auto__main-item wow zoomInLeft" data-wow-delay="0.5s">
							<img class="img-responsive center-block"  src="/media/270x150/LandRover.jpg" alt="LandRover" />
							<div class="b-world__item-val">
								<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
							</div>
							<h2><a href="/detail.html">Land Rover Range Rover</a></h2>
							<div class="b-auto__main-item-info s-lineDownLeft">
								<span class="m-price">
									$44,380
								</span>
								<span class="m-number">
									<span class="fa fa-tachometer"></span>35,000 KM
								</span>
							</div>
							<div class="b-featured__item-links m-auto">
								<a href="/#">Used</a>
								<a href="/#">2014</a>
								<a href="/#">Manual</a>
								<a href="/#">Orange</a>
								<a href="/#">Petrol</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="b-auto__main-item wow zoomInLeft" data-wow-delay="0.5s">
							<img class="img-responsive center-block"  src="/media/270x150/nissanGT.jpg" alt="nissan" />
							<div class="b-world__item-val">
								<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
							</div>
							<h2><a href="/detail.html">Nissan GT-R NISMO</a></h2>
							<div class="b-auto__main-item-info s-lineDownLeft">
								<span class="m-price">
									$10,857
								</span>
								<span class="m-number">
									<span class="fa fa-tachometer"></span>35,000 KM
								</span>
							</div>
							<div class="b-featured__item-links m-auto">
								<a href="/#">Used</a>
								<a href="/#">2014</a>
								<a href="/#">Manual</a>
								<a href="/#">Orange</a>
								<a href="/#">Petrol</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="b-auto__main-item wow zoomInRight" data-wow-delay="0.5s">
							<img class="img-responsive center-block"  src="/media/270x150/bmw.jpg" alt="bmw" />
							<div class="b-world__item-val">
								<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
							</div>
							<h2><a href="/detail.html">BMW 650i Coupe</a></h2>
							<div class="b-auto__main-item-info s-lineDownLeft">
								<span class="m-price">
									$95,900
								</span>
								<span class="m-number">
									<span class="fa fa-tachometer"></span>12,000 KM
								</span>
							</div>
							<div class="b-featured__item-links m-auto">
								<a href="/#">Used</a>
								<a href="/#">2014</a>
								<a href="/#">Manual</a>
								<a href="/#">Orange</a>
								<a href="/#">Petrol</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="b-auto__main-item wow zoomInRight" data-wow-delay="0.5s">
							<img class="img-responsive center-block"  src="/media/270x150/camaro.jpg" alt="camaro" />
							<div class="b-world__item-val">
								<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>
							</div>
							<h2><a href="/detail.html">Chevrolet Corvette Z06</a></h2>
							<div class="b-auto__main-item-info s-lineDownLeft">
								<span class="m-price">
									$95,900
								</span>
								<span class="m-number">
									<span class="fa fa-tachometer"></span>12,000 KM
								</span>
							</div>
							<div class="b-featured__item-links m-auto">
								<a href="/#">Used</a>
								<a href="/#">2014</a>
								<a href="/#">Manual</a>
								<a href="/#">Orange</a>
								<a href="/#">Petrol</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--"b-related-->

		<section class="b-brands s-shadow">
			<div class="container">
				<h5 class="s-titleBg wow zoomInUp" data-wow-delay="0.5s">FIND OUT MORE</h5><br />
				<h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">BRANDS WE OFFER</h2>
				<div class="">
					<div class="b-brands__brand wow rotateIn" data-wow-delay="0.5s">
						<img src="/media/brands/bmwLogo.png" alt="brand" />
					</div>
					<div class="b-brands__brand wow rotateIn" data-wow-delay="0.5s">
						<img src="/media/brands/ferrariLogo.png" alt="brand" />
					</div>
					<div class="b-brands__brand wow rotateIn" data-wow-delay="0.5s">
						<img src="/media/brands/volvo.png" alt="brand" />
					</div>
					<div class="b-brands__brand wow rotateIn" data-wow-delay="0.5s">
						<img src="/media/brands/mercLogo.png" alt="brand" />
					</div>
					<div class="b-brands__brand wow rotateIn" data-wow-delay="0.5s">
						<img src="/media/brands/audiLogo.png" alt="brand" />
					</div>
					<div class="b-brands__brand wow rotateIn" data-wow-delay="0.5s">
						<img src="/media/brands/honda.png" alt="brand" />
					</div>
					<div class="b-brands__brand wow rotateIn" data-wow-delay="0.5s">
						<img src="/media/brands/peugeot.png" alt="brand" />
					</div>
				</div>
			</div>
		</section><!--b-brands-->

		<div class="b-features">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-offset-3 col-xs-6 col-xs-offset-6">
						<ul class="b-features__items">
							<li class="wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">Low Prices, No Haggling</li>
							<li class="wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">Largest Car Dealership</li>
							<li class="wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">Multipoint Safety Check</li>
						</ul>
					</div>
				</div>
			</div>
		</div><!--b-features-->

		<div class="b-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <aside class="b-info__aside wow zoomInLeft" data-wow-delay="0.3s">
                            <article class="b-info__aside-article">
                                <h3>HEURES D'OUVERTURE</h3>
                                <div class="b-info__aside-article-item">
                                    <h6>Département des ventes</h6>
                                            <p>Dim-Jeu : 8:00am - 5:00pm 
                                                <br/>Samedi est fermé</p>
                                </div>
                                <div class="b-info__aside-article-item">
                                    <h6>Département des services</h6>
                                            <p>Dim-Jeu : 8:00am - 5:00pm
                                                <br/>Samedi est fermé</p>
                                </div>
                            </article>
                            <article class="b-info__aside-article">
                                <h3>AA propos</h3>
                                <p>Dénommée SARL A.C.A ACHOUR ENTREPRISES  au capital de 105 000 000.00 DA  registre de commerce n° 11 B 0563288-28/00, dont le siège social est situé cité Elhebal Local N° 03, Hammam Dalaa, M'sila, représentée par Achour Abderrazak dûment habilité en sa qualité de Gérant elle fonctionne sous la forme d’une société par actions, régie par les lois et réglementations en vigueur en Algérie, ainsi que par les statuts de la société.</p>
                            </article>
                            <a href="/about" class="btn m-btn">Lire la suite<span class="fa fa-angle-right"></span></a>
                        </aside>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="b-info__latest">
                            <h3>DERNIERS AUTOS</h3>
                            @foreach($productsF as $pro)
                            <div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.3s">
                                <img style=" width: 80px;float: left; height: 65px" src="/storage/{{$pro->main_image}}">
                                <div class="b-info__latest-article-info">
                                    <h6><a href="detail.html">{{$pro->name}}</a></h6>
                                    <p><span class="fa fa-tachometer"></span> 35,000 KM</p>
                                </div>
                            </div>
                            @endforeach
                            <!--<div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.3s">
                                <div class="b-info__latest-article-photo m-audiSpyder"></div>
                                <div class="b-info__latest-article-info">
                                    <h6><a href="#">AUDI R8 SPYDER V-8</a></h6>
                                    <p><span class="fa fa-tachometer"></span> 35,000 KM</p>
                                </div>
                            </div>
                            <div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.3s">
                                <div class="b-info__latest-article-photo m-aston"></div>
                                <div class="b-info__latest-article-info">
                                    <h6><a href="#">ASTON MARTIN VANTAGE</a></h6>
                                    <p><span class="fa fa-tachometer"></span> 35,000 KM</p>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="b-info__twitter">
                            <h3>from twitter</h3>
                            <div class="b-info__twitter-article wow zoomInUp" data-wow-delay="0.3s">
                                <div class="b-info__twitter-article-icon"><span class="fa fa-twitter"></span></div>
                                <div class="b-info__twitter-article-content">
                                    <p>Duis scelerisque aliquet ante donec libero pede porttitor dacu</p>
                                    <span>20 minutes ago</span>
                                </div>
                            </div>
                            <div class="b-info__twitter-article wow zoomInUp" data-wow-delay="0.3s">
                                <div class="b-info__twitter-article-icon"><span class="fa fa-twitter"></span></div>
                                <div class="b-info__twitter-article-content">
                                    <p>Duis scelerisque aliquet ante donec libero pede porttitor dacu</p>
                                    <span>20 minutes ago</span>
                                </div>
                            </div>
                            <div class="b-info__twitter-article wow zoomInUp" data-wow-delay="0.3s">
                                <div class="b-info__twitter-article-icon"><span class="fa fa-twitter"></span></div>
                                <div class="b-info__twitter-article-content">
                                    <p>Duis scelerisque aliquet ante donec libero pede porttitor dacu</p>
                                    <span>20 minutes ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <address class="b-info__contacts wow zoomInUp" data-wow-delay="0.3s">
                            <p>CONTACTEZ NOUS</p>
                            <div class="b-info__contacts-item">
                                <span class="fa fa-map-marker"></span>
                                <em> CITÉ ELHEBAL LOCAL N° 03, HAMMAM DALAA, M'sila, DZ.</em>
                            </div>
                            <div class="b-info__contacts-item">
                                <span class="fa fa-phone"></span>
                                <em>Phone:  +213 561 66 54 40</em>
                            </div>
                            <div class="b-info__contacts-item">
                                <span class="fa fa-fax"></span>
                                <em>FAX:  +213 561 66 54 40</em>
                            </div>
                            <div class="b-info__contacts-item">
                                <span class="fa fa-envelope"></span>
                                <em>Email:  tayoub.walid@acachour.com</em>
                            </div>
                        </address>
                        <address class="b-info__map">
                            <a href="/contact">Ouvrir la carte de localisation</a>
                        </address>
                    </div>
                </div>
            </div>
        </div><!--b-info-->

        <footer class="b-footer">
            <a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="b-footer__company wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="b-nav__logo">
                                <h3><a href="home.html">Auto<span>Club</span></a></h3>
                            </div>
                            <p>&copy; 2019 Conçu par <a href="http://clickmarketing-dz.com">Click Marketing.</a> </p>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="b-footer__content wow fadeInRight" data-wow-delay="0.3s">
                            <div class="b-footer__content-social">
                                <a href="https://www.facebook.com/ACA-Achour-Entreprises-180860782382439/"><span class="fa fa-facebook-square"></span></a>
                                <a href="#"><span class="fa fa-twitter-square"></span></a>
                                <a href="#"><span class="fa fa-google-plus-square"></span></a>
                                <a href="#"><span class="fa fa-instagram"></span></a>
                                <a href="#"><span class="fa fa-youtube-square"></span></a>
                                <a href="#"><span class="fa fa-skype"></span></a>
                            </div>
                            <nav class="b-footer__content-nav">
                                <ul>
                                    <li><a href="home.html">Home</a></li>
                                    <li><a href="404.html">Pages</a></li>
                                    <li><a href="listings.html">Inventory</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="404.html">Services</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="listTable.html">Shop</a></li>
                                    <li><a href="contacts.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--b-footer-->
		<!--Main-->   
		<script src="/js/jquery-1.11.3.min.js"></script>
		<script src="/js/jquery-ui.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/modernizr.custom.js"></script>

		<script src="/assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
		<script src="/js/waypoints.min.js"></script>
		<script src="/js/jquery.easypiechart.min.js"></script>
		<script src="/js/classie.js"></script>

		<!--Switcher-->
		<script src="/assets/switcher/js/switcher.js"></script>
		<!--Owl Carousel-->
		<script src="/assets/owl-carousel/owl.carousel.min.js"></script>
		<!--bxSlider-->
		<script src="/assets/bxslider/jquery.bxslider.js"></script>
		<!-- jQuery UI Slider -->
		<script src="/assets/slider/jquery.ui-slider.js"></script>

		<!--Theme-->
		<script src="/js/jquery.smooth-scroll.js"></script>
		<script src="/js/wow.min.js"></script>
		<script src="/js/jquery.placeholder.min.js"></script>
		<script src="/js/theme.js"></script>
	</body>
</html>