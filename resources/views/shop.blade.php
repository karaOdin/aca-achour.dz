<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Auto Club</title>

		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

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
				<h1 class="wow zoomInLeft" data-wow-delay="0.5s">Auto Listings</h1>
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
								<a href="#" class="dropdown-toggle b-infoBar__compare-item" data-toggle='dropdown'><span class="fa fa-clock-o"></span>RECENTLY VIEWED<span class="fa fa-caret-down"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
							</div>
							<a href="#" class="b-infoBar__compare-item"><span class="fa fa-compress"></span>COMPARE VEHICLES: 2</a>
						</div>
					</div>
					<div class="col-lg-8 col-xs-12">
						<div class="b-infoBar__select wow zoomInUp" data-wow-delay="0.5s">
							<form method="post" action="/">
								<div class="b-infoBar__select-one">
									<span class="b-infoBar__select-one-title">SELECT VIEW</span>
									<a href="listings.html" class="m-list"><span class="fa fa-list"></span></a>
									<a href="listTableTwo.html" class="m-table m-active"><span class="fa fa-table"></span></a>
								</div>
								<div class="b-infoBar__select-one">
									<span class="b-infoBar__select-one-title">SHOW ON PAGE</span>
									<select name="select1" class="m-select">
										<option value="" selected="">10 items</option>
									</select>
									<span class="fa fa-caret-down"></span>
								</div>
								<div class="b-infoBar__select-one">
									<span class="b-infoBar__select-one-title">SORT BY</span>
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
													<option value="{{route('products.index', ['category' => $category->slug])}}" >{{$category->name}}</option>
													@endforeach
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
										<div class="b-items__aside-main-body-item">
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
									</footer>
								</form>
							</div>
							<div class="b-items__aside-sell wow zoomInUp" data-wow-delay="0.5s">
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
							</div>
						</aside>
					</div>
					<div class="col-lg-9 col-sm-8 col-xs-12">
						<div class="row m-border">
							
							@forelse($products as $product)
							<div class="col-lg-4 col-md-6 col-xs-12 wow zoomInUp" data-wow-delay="0.5s">
								<div class="b-items__cell">
									<div class="b-items__cars-one-img">
										<img class='img-responsive' src="/storage/{{$product->main_image}}" alt='ferrari'/>
										<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
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
										<div>
											<div class="row m-smallPadding">
												{!! $product->description !!}
											</div>
										</div>
										<h5 class="b-items__cell-info-price"><span>Prix:</span>DA {{$product->price}}</h5>
									</div>
								</div>
							</div>
							@empty
							<h2>not item founds</h2>
							@endforelse
						</div>
						<div class="b-items__pagination">
							<div class="b-items__pagination-main wow zoomInUp" data-wow-delay="0.5s">
								<a data-toggle="modal" data-target="#myModal" href="#" class="m-left"><span class="fa fa-angle-left"></span></a>
								<span class="m-active"><a href="#">1</a></span>
								<span><a href="#">2</a></span>
								<span><a href="#">3</a></span>
								<span><a href="#">4</a></span>
								<a href="#" class="m-right"><span class="fa fa-angle-right"></span></a>    
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--b-items-->

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
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.custom.js"></script>

		<script src="assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.easypiechart.min.js"></script>
		<script src="js/classie.js"></script>

		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
		<!--Owl Carousel-->
		<script src="assets/owl-carousel/owl.carousel.min.js"></script>
		<!--bxSlider-->
		<script src="assets/bxslider/jquery.bxslider.js"></script>
		<!-- jQuery UI Slider -->
		<script src="assets/slider/jquery.ui-slider.js"></script>

		<!--Theme-->
		<script src="js/jquery.smooth-scroll.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/theme.js"></script>
	</body>
</html>