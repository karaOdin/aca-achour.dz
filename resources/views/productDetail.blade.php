<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>{{ setting('site.title')}} | {{$product->name}}</title>

		<link rel="shortcut icon" type="image/x-icon" href="/storage/favicon-16x16.png" />

<!-- Scripts -->

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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
			
    <!-- Styles -->

		        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

	</head>
		@if(session()->has('messagePro'))
      <script>


            var type = "{{Session::get('alert-type','success')}}"
            toastr.success("{{ Session::get('messagePro') }}");
      </script>
    @endif
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
							{!! $product->video !!}
							
							
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

        @include('layouts.header')


		<section class="b-pageHeader">
			<div class="container">
				<h1 class="wow zoomInLeft" data-wow-delay="0.5s">Détails de la Produit</h1>
			</div>
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow wow zoomInUp" data-wow-delay="0.5s">
			<div class="container">
				<a href="/" class="b-breadCumbs__page">Accueil</a><span class="fa fa-angle-right"></span><a href="{{route('products.index')}}" class="b-breadCumbs__page">Activities</a><span class="fa fa-angle-right"></span><a href="{{route('products.show',$product->slug)}}" class="b-breadCumbs__page">{{$product->name}}</a>
			</div>
		</div><!--b-breadCumbs-->

		<div class="b-infoBar">
			<div class="container">
				<div class="row wow zoomInUp" data-wow-delay="0.5s">
					@if($product->newest == 'On')
					<div class="col-xs-3">
						<div class="b-infoBar__premium">Nouvelle liste</div>
					</div>
					@endif
					<div class="col-xs-9">
						<div class="b-infoBar__btns">
							<a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" class="btn m-btn m-infoBtn">PARTAGEZ CE PRODUIT<span class="fa fa-angle-right"></span></a>
							<!--<a href="/#" class="btn m-btn m-infoBtn">PRINT THIS PAGE<span class="fa fa-angle-right"></span></a>-->
							@if(!is_null($product->manual))
							<a href="{{$product->manual}}" class="btn m-btn m-infoBtn">TELECHARGER LE MANUEL<span class="fa fa-angle-right"></span></a>
							@endif
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
								<h3>{{$product->category->name}}</h3>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12">
							<div class="b-detail__head-price">
								<div class="b-detail__head-price-num">DA{{$product->price}}</div>
								<p>Taxes incluses et Checkup</p>
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
								
								<div class="b-detail__main-info-text wow zoomInUp" data-wow-delay="0.5s">
									<div class="b-detail__main-aside-about-form-links">
										<a href="/#" class="j-tab m-active s-lineDownCenter" data-to='#info1'>Description</a>
										
									</div>
									<div id="info1">
										{!!$product->description!!}
									</div>
									
								</div>
								
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<aside class="b-detail__main-aside">
								
								<div class="b-detail__main-aside-about wow zoomInUp" data-wow-delay="0.5s">
									<h2 class="s-titleDet">Devis</h2>
									<div class="b-detail__main-aside-about-call">
										<span class="fa fa-phone"></span>
										<div>{{setting('general-info.admin_tel')}}.</div>
										<p>Appelez le vendeur 24/7 et ils vous aideraient.</p>
									</div>
									<div class="b-detail__main-aside-about-seller">
										<p>Marque: <span>{{$product->category->name}}</span></p>
									</div>
									<div class="b-detail__main-aside-about-form">
										<div class="b-detail__main-aside-about-form-links">
											<a href="/#" class="j-tab m-active s-lineDownCenter" data-to='#form1'>Demande de Devis</a>
											
										<form id="form1" action="{{route('products.show',$product->slug)}}" method="post" enctype="multipart/form-data">
										    {{ csrf_field() }}
											<input type="text" placeholder="Votre Nom" value="" name="name" />
											<input type="email" placeholder="EMAIL ADDRESS" value="" name="email" />
											<input type="tel" placeholder="PHONE NO." value="" name="name" />
											<textarea name="text" placeholder="Message"></textarea>
											 <input type="hidden"  name="product" value="{{$product->name}}">

											
											<button type="submit" class="btn m-btn">ENVOYER LE MESSAGE<span class="fa fa-angle-right"></span></button>
										</form>
										
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
				<h5 class="s-titleBg wow zoomInUp" data-wow-delay="0.5s">EN SAVOIR PLUS</h5><br />
				<h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">PRODUITS CONNEXES EN VENTE</h2>
				<div class="row">
					@foreach($mightAlsoLike as $might)
					<div class="col-md-3 col-xs-6">
						<div class="b-auto__main-item wow zoomInLeft" data-wow-delay="0.5s">
							<img class="img-responsive center-block"  src="/storage/{{$might->image}}" alt="LandRover" />
							<div class="b-world__item-val">
								<!--<span class="b-world__item-val-title">REGISTERED <span>2014</span></span>-->
							</div>
							<h2><a href="{{route('products.show',$might->slug)}}">{{$might->name}}</a></h2>
							<div class="b-auto__main-item-info s-lineDownLeft">
								<span class="m-price">
									{{$might->price}}
								</span>
								
							</div>
							<!--<div class="b-featured__item-links m-auto">
								<a href="/#">Used</a>
								<a href="/#">2014</a>
								<a href="/#">Manual</a>
								<a href="/#">Orange</a>
								<a href="/#">Petrol</a>
							</div>-->
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section><!--"b-related-->

		<section class="b-brands s-shadow">
			<div class="container">
				<h5 class="s-titleBg wow zoomInUp" data-wow-delay="0.5s">EN SAVOIR PLUS</h5><br />
				<h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">MARQUES QUE NOUS OFFRONS</h2>
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

@include('layouts.footer')