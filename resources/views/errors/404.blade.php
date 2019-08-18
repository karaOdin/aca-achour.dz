@extends('layouts.app')
@section('content')
<section class="b-pageHeader">
			<div class="container">
				<h1 class="wow zoomInUp" data-wow-delay="0.7s">Erreur 404 Page</h1>
			</div>
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow">
			<div class="container">
				<a href="home.html" class="b-breadCumbs__page">Accueil</a><span class="fa fa-angle-right"></span><a href="404.html" class="b-breadCumbs__page m-active">Page Non Trouvée</a>
			</div>
		</div><!--b-breadCumbs-->

		<section class="b-error s-shadow">
			<div class="container">
				<h1 class="wow zoomInUp" data-wow-delay="0.7s">Erreur</h1>
				<img class="img-responsive center-block wow zoomInUp" data-wow-delay="0.7s" src="images/backgrounds/404.png" alt="404" />
				<h2 class="s-lineDownCenter wow zoomInUp" data-wow-delay="0.7s">Page non trouvée</h2>
				<p class="wow zoomInUp" data-wow-delay="0.7s">La page que vous recherchez n'est pas disponible et a peut-être été supprimée, son nom modifié ou est temporairement indisponible.</p>
				<h3 class="s-title wow zoomInUp" data-wow-delay="0.7s">Essayez de trouver une page</h3>
				<form class="b-blog__aside-search" action="/" method="post">
					<div>
						<input type="text" name="search" value=""/>
						<button type="submit"><span class="fa fa-search"></span></button>
					</div>        
				</form>
			</div>
			<img alt="audi" src="images/backgrounds/404Bg.jpg" class="img-responsive center-block b-error-img" />
		</section><!--b-error-->

@endsection