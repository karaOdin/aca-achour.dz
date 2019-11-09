<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>{{ setting('site.title')}} | Promotions</title>

		<link rel="shortcut icon" type="image/x-icon" href="/storage/favicon-16x16.png" />

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
	<body class="m-listings" data-scrolling-animations="true" >

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
				<h1 class=" wow zoomInLeft" data-wow-delay="0.5s">Notre Projets</h1>
				<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
					<h3>Votre recherche a donner {{$projects->count()}} résultats</h3>
				</div>
			</div>
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow">
			<div class="container wow zoomInUp" data-wow-delay="0.5s">
				<a href="/" class="b-breadCumbs__page">Accueil</a><span class="fa fa-angle-right"></span><a href="{{route('projects.index')}}" class="b-breadCumbs__page m-active">Projets</a>
			</div>
		</div><!--b-breadCumbs-->

		<div class="b-infoBar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-xs-12">
						<div class="b-infoBar__compare wow zoomInUp" data-wow-delay="0.5s">
							<div class="dropdown">
								<a href="/#" class="dropdown-toggle b-infoBar__compare-item" data-toggle='dropdown'><span class="fa fa-clock-o"></span>VU RÉCEMMENT<span class="fa fa-caret-down"></span></a>
								<ul class="dropdown-menu">
									@if(!is_null($recentlyViewedProjects))
										@foreach($recentlyViewedProjects as $recentProject)
											<li><a href="{{route('projects.show',$recentProject->slug)}}">{{$recentProject->name}}</a></li>
										@endforeach
									@else
										<li>No item Found</li>
									@endif
								</ul>
							</div>
							
						</div>
					</div>
					<div class="col-lg-8 col-xs-12">
						<div class="b-infoBar__select">
							<form method="post" action="/">
								
								<div class="b-infoBar__select-one wow zoomInUp" data-wow-delay="0.5s">
									<span class="b-infoBar__select-one-title">TRIER PAR</span>
									<select name="select2" class="m-select">
										<option value="" selected="">Dernier ajouté</option>
									</select>
									<span class="fa fa-caret-down"></span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--b-infoBar-->

		<section class="b-items s-shadow">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-sm-8 col-xs-12">
						<div class="b-items__cars">
							@forelse($projects as $project)
							<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
								<div class="b-items__cars-one-img">
									<img src="/storage/{{$project->image}}" style="width: 100% ;height: auto;" alt='dodge'/>
									
									<span class="b-items__cars-one-img-type m-premium">{{$project->etat}}</span>
									<form action="/" method="post">
										<input type="checkbox" name="check1" id='check1'/>
										<label for="check1" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
									</form>
								</div>
								<div class="b-items__cars-one-info">
									<header class="b-items__cars-one-info-header <?php if($project->price) print "s-lineDownLeft"; ?> ">
										<h2>{{$project->name}}</h2>
										@if($project->etat)
											<span>{{$project->etat}}</span>
										@endif
									</header>
									{!! $project->overview !!}
									<div class="b-items__cars-one-info-km">
										<span class="fa fa-tachometer"></span> {{$project->location}}
									</div>
									<div class="b-items__cars-one-info-details">
										
										<a href="{{route('projects.show',$project->slug)}}" class="btn m-btn">VOIR LES DÉTAILS<span class="fa fa-angle-right"></span></a>
									</div>
								</div>
							</div>
							@empty

							@endforelse
						</div>
						<!--<div class="b-items__pagination wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-items__pagination-main">
								<a data-toggle="modal" data-target="#myModal" href="/#" class="m-left"><span class="fa fa-angle-left"></span></a>
								<span class="m-active"><a href="/#">1</a></span>
								<span><a href="/#">2</a></span>
								<span><a href="/#">3</a></span>
								<span><a href="/#">4</a></span>
								<a href="/#" class="m-right"><span class="fa fa-angle-right"></span></a>    
							</div>
						</div>-->
					</div>
					<div class="col-lg-3 col-sm-4 col-xs-12">
						<aside class="b-items__aside">
							<h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">PRÉCISEZ VOTRE RECHERCHE</h2>
							<div class="b-items__aside-main wow zoomInUp" data-wow-delay="0.5s">
								<form>
									<div class="b-items__aside-main-body">
										<div class="b-items__aside-main-body-item">
											<label>SÉLECTIONNER UN EMPLACEMENT</label>
											<div>
												<select name="select1" class="m-select" onchange="location = this.value;">
													<option value="{{url('projects')}}" >Tous</option>
													@foreach($proLoc as $pro)
													<option value="{{route('projects.index',['project'=>$pro->location])}}">{{$pro->location}}</option>
													@endforeach 
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										
										</div>
										<!--<div class="b-items__aside-main-body-item">
											<label>SELECT A MODEL</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">Any Make</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>-->
										<!--
										<div class="b-items__aside-main-body-item">
											<label>PRICE RANGE</label>
											<div class="slider"></div>
											<input type="hidden" name="min" value="100" class="j-min" />
											<input type="hidden" name="max" value="1000" class="j-max" />
										</div>
										<div class="b-items__aside-main-body-item">
											<label>VEHICLE TYPE</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">Any Type</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
										<div class="b-items__aside-main-body-item">
											<label>VEHICLE STATUS</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">Any Status</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
										<div class="b-items__aside-main-body-item">
											<label>FUEL TYPE</label>
											<div>
												<select name="select1" class="m-select">
													<option value="" selected="">All Fuel Types</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
									</div>
									<footer class="b-items__aside-main-footer">
										<button type="submit" class="btn m-btn">FILTER VEHICLES<span class="fa fa-angle-right"></span></button><br />
										<a href="/">RESET ALL FILTERS</a>
									</footer>-->
								</form>
							</div>
							
						</aside>
					</div>
				</div>
			</div>
		</section><!--b-items-->

@include('layouts.footer')