@extends('layouts.app')
@section('content')
@section('title', 'A Propos')

<section class="b-pageHeader">
			<div class="container">
				<h1 class="wow zoomInLeft" data-wow-delay="0.7s">A Propos</h1>
				<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.7s">
					<h3>The Largest Auto Dealer Online</h3>
				</div>
			</div>
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow">
			<div class="container">
				<a href="home.html" class="b-breadCumbs__page">Accueil</a><span class="fa fa-angle-right"></span><a href="{{url('about')}}" class="b-breadCumbs__page m-active">A Propos</a>
			</div>
		</div><!--b-breadCumbs-->

		<section class="b-best">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="b-best__info">
							<header class="s-lineDownLeft b-best__info-head">
								<h2 class="wow zoomInUp" data-wow-delay="0.5s">ACA Achour</h2>
							</header>
							<h6 class="wow zoomInUp" data-wow-delay="0.5s">La société SARL A.C.A Achour Entreprises au capital de 105 000 000.00 DA, crée le 23 Mai 2011</h6>
							<p class="wow zoomInUp" data-wow-delay="0.5s">dont l'implantaion sur le territoire ( Hammam Dalaa, M'sila, Eucaluptus, Laghouat) dont le siège social est situé cité El-hebal Local N° 03, Hammam Dalaa, M'sila, représentée par M. Achour Abderrazak dûment habilté en sa qulalité de Gérant elle fonctionne sous la forme d'une SARL régie par les lois et réglementations en vigeur en Algérie, ainsi que par les status de la société .</p>
							<!--<a href="article.html" class="btn m-btn m-readMore wow zoomInUp" data-wow-delay="0.5s">view listings<span class="fa fa-angle-right"></span></a>-->
						</div>
					</div>
					<div class="col-sm-6 col-xs-12">
						<img class="img-responsive center-block wow zoomInUp" data-wow-delay="0.5s" alt="best" src="/storage/about/office.jpg" />
					</div>
				</div>
			</div>
		</section><!--b-best-->

		<section class="b-what s-shadow m-home">
			<div class="container">
				<h3 class="s-titleBg wow zoomInUp" data-wow-delay="0.5s">LES CLIENTS SONT IMPORTANTS POUR NOUS</h3><br />
				<h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">NOUS OFFRONS</h2>
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div class="b-world__item wow zoomInLeft" data-wow-delay="0.5s">
							<img class="img-responsive" src="/storage/about/service-shipping.jpg" alt="wolks" />
							<div class="b-world__item-val">
								<span class="b-world__item-val-title">Nous offrons</span>
							</div>
							<h2>Transporteur routiers</h2>
							<p>Transporteur routiers (Agrégats, Ciment et matériaux de constructions) (1er Transporteur de LAFARGE Algérie) et location d'engins.</p>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="b-world__item wow zoomInUp" data-wow-delay="0.5s">
							<img class="img-responsive"  src="/storage/about/Webp.net-resizeimage (2).jpg" alt="mazda" />
							<div class="b-world__item-val">
								<span class="b-world__item-val-title">NOUS SOMMES LES</span>
							</div>
							<h2>Distribiteur agrée IVAL (IVECO, New Holland Construction)</h2>
							<p>Distribiteur agrée IVAL (IVECO, New Holland Construction), L'importation et la distrubution avec service aprés vente (Maintenance , Piéce de rechange).</p>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="b-world__item wow zoomInRight" data-wow-delay="0.5s">
							<img class="img-responsive"  src="/storage/about/estate.jpg" alt="chevrolet" />
							<div class="b-world__item-val">
								<span class="b-world__item-val-title">Nous offrons</span>
							</div>
							<h2>Promotion immobilière</h2>
							<p>Construction, Réalisation, traveaux de sou-traitance et promotion immobilière..</p>
						</div>
					</div>
				</div>
			</div>
		</section><!--b-what-->

		<section class="b-more">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="b-more__why wow zoomInLeft" data-wow-delay="0.5s">
							<h2 class="s-title">POURQUOI NOUS CHOISIR</h2>
							<p>Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamus etyd nunc. Nunc consequsem velde metus imperdiet lacinia. Lorem ipsum dolor sit amet sed consectetur adipisicing elit sed do eiusmod.</p>
							<ul class="s-list">
								<li><span class="fa fa-check"></span>Donec facilisis velit eu est phasellus consequat quis nostrud</li>
								<li><span class="fa fa-check"></span>Aenean vitae quam. Vivamus et nunc nunc conseq</li>
								<li><span class="fa fa-check"></span>Sem vel metus imperdiet lacinia enean </li>
								<li><span class="fa fa-check"></span>Dapibus aliquam augue fusce eleifend quisque tels</li>
								<li><span class="fa fa-check"></span>Lorem ipsum dolor sit amet, consectetur </li>
								<li><span class="fa fa-check"></span>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Magna </li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12">
						<div class="b-more__info wow zoomInRight" data-wow-delay="0.5s">
							<h2 class="s-title">PLUS D'INFORMATIONS</h2>
							<div class="b-more__info-block">
								<div class="b-more__info-block-title">Fair Price for Everyone<a class="j-more" href="#"><span class="fa fa-angle-left"></span></a></div>
								<div class="b-more__info-block-inside j-inside">
									<p>Curabitur libero. Donec facilisis velit est. Phasellus consquat. Aenean vitae quam. Vivam
										etl nunc. Nunc con sequsem velde metus imperdiet lacinia. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
								</div>
							</div>
							<div class="b-more__info-block">
								<div class="b-more__info-block-title">Large Number of Vehicles<a href="#" class="j-more"><span class="fa fa-angle-left"></span></a></div>
								<div class="b-more__info-block-inside j-inside">
									<p>Curabitur libero. Donec facilisis velit est. Phasellus consquat. Aenean vitae quam. Vivam
										etl nunc. Nunc con sequsem velde metus imperdiet lacinia. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
								</div>
							</div>
							<div class="b-more__info-block">
								<div class="b-more__info-block-title">Auto Loan Available<a href="#" class="j-more"><span class="fa fa-angle-left"></span></a></div>
								<div class="b-more__info-block-inside j-inside">
									<p>Curabitur libero. Donec facilisis velit est. Phasellus consquat. Aenean vitae quam. Vivam
										etl nunc. Nunc con sequsem velde metus imperdiet lacinia. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--b-more-->

		<section class="b-personal s-shadow">
			<div class="container">
				<h3 class="s-titleBg wow zoomInUp" data-wow-delay="0.5s">LES PERSONNES SUR lesquelles vous pouvez avoir confiance</h3><br />
				<h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">NOTRE EQUIPE MEMBRES</h2>
				<div id="carousel-small" class="owl-carousel enable-owl-carousel" data-items="4" data-navigation="true" data-auto-play="true" data-stop-on-hover="true" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="2">
					<div>
						<div class="b-personal__worker wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-personal__worker-img">
								<img src="media/persons/jason.jpg" class="img-responsive" alt="jason"/>
								<div class="b-personal__worker-img-social">
									<div class="b-personal__worker-img-social-main">
										<a href="#"><span class="fa fa-facebook-square"></span></a>
										<a href="#"><span class="fa fa-twitter-square"></span></a>
										<a href="#"><span class="fa fa-pinterest-square"></span></a>
										<a href="#"><span class="fa fa-google-plus-square"></span></a>
									</div>
								</div>
							</div>
							<h6>Owner / Co-Invester</h6>
							<div class="b-personal__worker-name s-lineDownLeft">
								<h4 class="s-titleDet">Jason Roy</h4>
							</div>
							<p>Owner of AutoClub, started the company
								in 2005. A very hard working person who loves to drive the cars.</p>
						</div>
					</div>
					<div>
						<div class="b-personal__worker wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-personal__worker-img">
								<img src="media/persons/paul.jpg" class="img-responsive" alt="paul"/>
								<div class="b-personal__worker-img-social">
									<div class="b-personal__worker-img-social-main">
										<a href="#"><span class="fa fa-facebook-square"></span></a>
										<a href="#"><span class="fa fa-twitter-square"></span></a>
										<a href="#"><span class="fa fa-pinterest-square"></span></a>
										<a href="#"><span class="fa fa-google-plus-square"></span></a>
									</div>
								</div>
							</div>
							<h6>Delivery Incharge</h6>
							<div class="b-personal__worker-name s-lineDownLeft">
								<h4 class="s-titleDet">Paul Richard</h4>
							</div>
							<p>Owner of AutoClub, started the company
								in 2005. A very hard working person who loves to drive the cars.</p>
						</div>
					</div>
					<div>
						<div class="b-personal__worker wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-personal__worker-img">
								<img src="media/persons/peter.jpg" class="img-responsive" alt="peter"/>
								<div class="b-personal__worker-img-social">
									<div class="b-personal__worker-img-social-main">
										<a href="#"><span class="fa fa-facebook-square"></span></a>
										<a href="#"><span class="fa fa-twitter-square"></span></a>
										<a href="#"><span class="fa fa-pinterest-square"></span></a>
										<a href="#"><span class="fa fa-google-plus-square"></span></a>
									</div>
								</div>
							</div>
							<h6>Auto Reviewer / Technican</h6>
							<div class="b-personal__worker-name s-lineDownLeft">
								<h4 class="s-titleDet">Peter Harold</h4>
							</div>
							<p>Owner of AutoClub, started the company
								in 2005. A very hard working person who loves to drive the cars.</p>
						</div>
					</div>
					<div>
						<div class="b-personal__worker wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-personal__worker-img">
								<img src="media/persons/maria.jpg" class="img-responsive" alt="maria"/>
								<div class="b-personal__worker-img-social">
									<div class="b-personal__worker-img-social-main">
										<a href="#"><span class="fa fa-facebook-square"></span></a>
										<a href="#"><span class="fa fa-twitter-square"></span></a>
										<a href="#"><span class="fa fa-pinterest-square"></span></a>
										<a href="#"><span class="fa fa-google-plus-square"></span></a>
									</div>
								</div>
							</div>
							<h6>Sales Representative</h6>
							<div class="b-personal__worker-name s-lineDownLeft">
								<h4 class="s-titleDet">Maria Susan</h4>
							</div>
							<p>Owner of AutoClub, started the company
								in 2005. A very hard working person who loves to drive the cars.</p>
						</div>
					</div>
					<div>
						<div class="b-personal__worker wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-personal__worker-img">
								<img src="media/persons/jason.jpg" class="img-responsive" alt="jason"/>
								<div class="b-personal__worker-img-social">
									<div class="b-personal__worker-img-social-main">
										<a href="#"><span class="fa fa-facebook-square"></span></a>
										<a href="#"><span class="fa fa-twitter-square"></span></a>
										<a href="#"><span class="fa fa-pinterest-square"></span></a>
										<a href="#"><span class="fa fa-google-plus-square"></span></a>
									</div>
								</div>
							</div>
							<h6>Owner / Co-Invester</h6>
							<div class="b-personal__worker-name s-lineDownLeft">
								<h4 class="s-titleDet">Jason Roy</h4>
							</div>
							<p>Owner of AutoClub, started the company
								in 2005. A very hard working person who loves to drive the cars.</p>
						</div>
					</div>
					<div>
						<div class="b-personal__worker wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-personal__worker-img">
								<img src="media/persons/paul.jpg" class="img-responsive" alt="paul"/>
								<div class="b-personal__worker-img-social">
									<div class="b-personal__worker-img-social-main">
										<a href="#"><span class="fa fa-facebook-square"></span></a>
										<a href="#"><span class="fa fa-twitter-square"></span></a>
										<a href="#"><span class="fa fa-pinterest-square"></span></a>
										<a href="#"><span class="fa fa-google-plus-square"></span></a>
									</div>
								</div>
							</div>
							<h6>Delivery Incharge</h6>
							<div class="b-personal__worker-name s-lineDownLeft">
								<h4 class="s-titleDet">Paul Richard</h4>
							</div>
							<p>Owner of AutoClub, started the company
								in 2005. A very hard working person who loves to drive the cars.</p>
						</div>
					</div>
					<div>
						<div class="b-personal__worker wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-personal__worker-img">
								<img src="media/persons/peter.jpg" class="img-responsive" alt="peter"/>
								<div class="b-personal__worker-img-social">
									<div class="b-personal__worker-img-social-main">
										<a href="#"><span class="fa fa-facebook-square"></span></a>
										<a href="#"><span class="fa fa-twitter-square"></span></a>
										<a href="#"><span class="fa fa-pinterest-square"></span></a>
										<a href="#"><span class="fa fa-google-plus-square"></span></a>
									</div>
								</div>
							</div>
							<h6>Auto Reviewer / Technican</h6>
							<div class="b-personal__worker-name s-lineDownLeft">
								<h4 class="s-titleDet">Peter Harold</h4>
							</div>
							<p>Owner of AutoClub, started the company
								in 2005. A very hard working person who loves to drive the cars.</p>
						</div>
					</div>
					<div>
						<div class="b-personal__worker wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-personal__worker-img">
								<img src="media/persons/maria.jpg" class="img-responsive" alt="maria"/>
								<div class="b-personal__worker-img-social">
									<div class="b-personal__worker-img-social-main">
										<a href="#"><span class="fa fa-facebook-square"></span></a>
										<a href="#"><span class="fa fa-twitter-square"></span></a>
										<a href="#"><span class="fa fa-pinterest-square"></span></a>
										<a href="#"><span class="fa fa-google-plus-square"></span></a>
									</div>
								</div>
							</div>
							<h6>Sales Representative</h6>
							<div class="b-personal__worker-name s-lineDownLeft">
								<h4 class="s-titleDet">Maria Susan</h4>
							</div>
							<p>Owner of AutoClub, started the company
								in 2005. A very hard working person who loves to drive the cars.</p>
						</div>
					</div>
				</div>
			</div>
		</section><!--b-personal-->

		

@endsection