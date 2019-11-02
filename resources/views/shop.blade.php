<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>{{ setting('site.title')}} | Produits</title>

		<link rel="shortcut icon" type="image/x-icon" href="/storage/favicon-16x16.png" />

		<link href="css/master.css" rel="stylesheet">

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color1.css" title="color1" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color2.css" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color3.css" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color4.css" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color5.css" title="color5" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color6.css" title="color6" media="all" />

		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body class="m-listTableTwo" data-scrolling-animations="true" data-equal-height=".b-items__cell">

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
									<a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#f76d2b;"> </a>
									<a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#de483d;"> </a>
									<a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#228dcb;"> </a>
									<a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#00bff3;"> </a>
									<a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#2dcc70;"> </a>
									<a href="#" data-switchcolor="color6" class="styleswitch" style="background-color:#6054c2;"> </a>
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
				<div class="modal-dialog ">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Video</h4>
						</div>
						<div class="modal-body">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/a_ugz7GoHwY" allowfullscreen></iframe>
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
                            {{setting('general-info.admin_adress')}}.
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="b-topBar__tel">
                            <span class="fa fa-phone"></span>
                            {{setting('general-info.admin_tel')}}. 
                        </div>
                    </div>
                   
                </div>
            </div>
        </header><!--b-topBar-->

         @include('layouts.header')

		<section class="b-pageHeader">
			<div class="container">
				<h1 class="wow zoomInLeft" data-wow-delay="0.5s">Notre Produits</h1>
				<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
					<h3>Votre recherche a donner {{$products->count()}} résultats</h3>
				</div>
			</div>
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow">
			<div class="container wow zoomInUp" data-wow-delay="0.5s">
				<a href="/" class="b-breadCumbs__page">Accueil</a><span class="fa fa-angle-right"></span><a href="{{route('products.index')}}" class="b-breadCumbs__page m-active">Résultats de la recherche</a>
			</div>
		</div><!--b-breadCumbs-->

		<div class="b-infoBar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-xs-12">
						<div class="b-infoBar__compare wow zoomInUp" data-wow-delay="0.5s">
							<div class="dropdown">
								<a href="#" class="dropdown-toggle b-infoBar__compare-item" data-toggle='dropdown'><span class="fa fa-clock-o"></span>VU RÉCEMMENT<span class="fa fa-caret-down"></span></a>
								<ul class="dropdown-menu">
									@if(!is_null($recentlyViewed))
										@foreach($recentlyViewed as $recent)
											<li><a href="{{route('products.show',$recent->slug)}}">{{$recent->name}}</a></li>
										@endforeach
									@else
										<li>Aucun article trouvé</li>
									@endif
								</ul>
							</div>
							
						</div>
					</div>
					<div class="col-lg-8 col-xs-12">
						<div class="b-infoBar__select wow zoomInUp" data-wow-delay="0.5s">
							<form method="post" action="/">
								
								<div class="b-infoBar__select-one">
									<span class="b-infoBar__select-one-title">TRIER PAR</span>
									<select name="select2" class="m-select"  onchange="location= this.value;">
										<option value="" selected="">Filtere par</option>
										<option value="{{route('products.index',['sort'=>request()->activity ,'sort'=>'newest'])}}" >Newest</option>
									</select>
									<span class="fa fa-caret-down"></span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--b-infoBar-->
		
        <section >
            <div class="container" >
                <div class="row wow zoomInUp" style="padding:40px" data-wow-delay="0.5s">
                    <div class="col-xs-12">
                                    <h2 class="s-title wow zoomInUp">{{$productsAct ? $productsAct->name : $productCat->name}}</h2>
                                    <p>{{ $productsAct ? $productsAct->description : $productCat->description }}.</p>
        
                    </div>
                </div>
            </div>
        </section>
        
		<div class="b-items">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-4 col-xs-12">
						<aside class="b-items__aside">
							<h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">PRÉCISEZ VOTRE RECHERCHE</h2>
							<div class="b-items__aside-main wow zoomInUp" data-wow-delay="0.5s">
								<form>
									<div class="b-items__aside-main-body">
										<div class="b-items__aside-main-body-item">
											<label>CHOISIR UNE MARQUE</label>
											<div>
												<select name="select1" class="m-select" onchange="location = this.value;">
													<option value="{{url('products')}}" selected="">Toute marque</option>
													@foreach($categories as $category)
													<option value="{{route('products.index', ['category' => $category->slug])}}" >{{$category->name}} {{$category->activity->name}}</option>
													@endforeach
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
										<!--<div class="b-items__aside-main-body-item">
											<label>SÉLECTIONNER UN MODÈLE</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">Toute marque</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
										<div class="b-items__aside-main-body-item">
											<label>ÉCHELLE DES PRIX</label>
											<div class="slider"></div>
											<input type="hidden" name="min" value="100" class="j-min" />
											<input type="hidden" name="max" value="1000" class="j-max" />
										</div>
										<div class="b-items__aside-main-body-item">
											<label>TYPE DE VÉHICULE</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">N'importe quel type</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
										<div class="b-items__aside-main-body-item">
											<label>STATUT DU VÉHICULE</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">N'importe quel statut</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
										<div class="b-items__aside-main-body-item">
											<label>TYPE DE CARBURANT</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">Tous les types de carburant</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
									</div>
									<footer class="b-items__aside-main-footer">
										<button type="submit" class="btn m-btn">VÉHICULES À FILTRE<span class="fa fa-angle-right"></span></button><br />
										<a href="">RÉINITIALISER TOUS LES FILTRES</a>
									</footer>-->
								</form>
							</div>
							<!--<div class="b-items__aside-sell wow zoomInUp" data-wow-delay="0.5s">
								<div class="b-items__aside-sell-img">
									<h3>SELL YOUR CAR</h3>
								</div>
								<div class="b-items__aside-sell-info">
									<p>
										Nam tellus enimds eleifend dignis lsim
										biben edum tristique sed metus fusce
										Maecenas lobortis.
									</p>
									<a href="submit1.html" class="btn m-btn">REGISTER NOW<span class="fa fa-angle-right"></span></a>
								</div>
							</div>-->
						</aside>
					</div>
					<div class="col-lg-9 col-sm-8 col-xs-12">
						<div class="row m-border">
							
							@forelse($products as $product)
							<div class="col-lg-4 col-md-6 col-xs-12 wow zoomInUp" data-wow-delay="0.5s">
								<div class="b-items__cell">
									<div class="b-items__cars-one-img">
										<img class='img-responsive' src="/storage/{{$product->main_image}}" alt='ferrari'/>
										
										@if($product->newest == 'On')
										<span class="b-items__cars-one-img-type m-listing">Nouvelle Liste</span>
										@endif
										<form action="/" method="post">
											<input type="checkbox" name="check2" id='check2'/>
											<label for="check2" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
										</form>
									</div>
									<div class="b-items__cell-info">
										<div class="s-lineDownLeft b-items__cell-info-title">
											<h2 class=""><a href="{{route('products.show', $product->slug)}}">{{$product->name}}</a></h2>
										</div>
										<p>Lorem ipsum dolor sit amet consec let radipisicing elit, sed do eiusmod  ...</p>
										
										<h5 class="b-items__cell-info-price"><span>Prix:</span>DA {{$product->price}}</h5>
									</div>
								</div>
							</div>
							@empty
							<h2>pas d'article trouvé</h2>
							@endforelse
						</div>
						
					</div>
				</div>
			</div>
		</div><!--b-items-->

@include('layouts.footer')