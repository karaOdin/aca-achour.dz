@extends('layouts.app')
@section('content')
@section('title', 'Contactez Nous')

@if(session()->has('message'))
      <script>


            var type = "{{Session::get('alert-type','success')}}"
            toastr.success("{{ Session::get('message') }}");
      </script>
    @endif
    
<section class="b-pageHeader">
			<div class="container">
				<h1 class=" wow zoomInLeft" data-wow-delay="0.5s">Contactez nous</h1>
				<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
					<h3>Entrez en contact avec nous maintenant</h3>
				</div>
			</div>
		</section><!--b-pageHeader-->

		<div class="b-breadCumbs s-shadow wow zoomInUp" data-wow-delay="0.5s">
			<div class="container">
				<a href="home.html" class="b-breadCumbs__page">Accueil</a><span class="fa fa-angle-right"></span><a href="contacts.html" class="b-breadCumbs__page m-active">Contactez nous</a>
			</div>
		</div><!--b-breadCumbs-->

		<div class="b-map wow zoomInUp" data-wow-delay="0.5s">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.4651682465064!2d4.385669214651372!3d35.911112480141355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128c7e1aae646677%3A0xaffa1e8bd13134a7!2sSARL+Aca+Achour!5e0!3m2!1sen!2sdz!4v1565952823298!5m2!1sen!2sdz" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div><!--b-map-->

		<section class="b-contacts s-shadow">
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						<div class="b-contacts__form">
							<header class="b-contacts__form-header s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
								<h2 class="s-titleDet">Formulaire de contact</h2> 
							</header>
							<p class=" wow zoomInUp" data-wow-delay="0.5s">Entrez vos commentaires à l'aide du formulaire ci-dessous et nos professionnels du service clientèle vous contacteront dans les meilleurs délais.</p>
							<div id="success"></div>
							<form id="contactForm" action="{{url('contact')}}" method="post"  class="s-form wow zoomInUp" data-wow-delay="0.5s" enctype="multipart/form-data">
								{{ csrf_field() }}

								<div class="s-relative">
									<select name="topic" id="user-topic" class="m-select">
										<option value="Not select">CHOISISSEZ UN SUJET</option>
										<option value="Service Commercial">Service Commercial</option>
										<option value="Support Téchnique">Support Téchnique</option>
										<option value="Autre">Autre</option>
									</select>
									<span class="fa fa-caret-down"></span>
								</div>
								<input type="text" placeholder="VOTRE NOM" value="" name="name" id="user-name" />
								<input type="text" placeholder="ADRESSE ÉLECTRONIQUE %" value="" name="email" id="user-email" />
								<input type="text" placeholder="PHONE NO." value="" name="phone" id="user-phone" />
								<textarea id="user-message" name="message" placeholder="COMMENTAIRES / SUGGESTIONS / COMMENTAIRES"></textarea>
								<button type="submit" class="btn m-btn">Envoyer maintenant<span class="fa fa-angle-right"></span></button>
							</form>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="b-contacts__address">
							<div class="b-contacts__address-hours">
								<h2 class="s-titleDet wow zoomInUp" data-wow-delay="0.5s">heures d'ouverture</h2>
								<div class="b-contacts__address-hours-main wow zoomInUp" data-wow-delay="0.5s">
									<div class="row">
										<div class="col-md-6 col-xs-12">
											<h5>Département des ventes</h5>
											<p>Dim-Jeu : 8:00am - 5:00pm <br/>Samedi est fermé</p>
										</div>
										<div class="col-md-6 col-xs-12">
											<h5>Département des services</h5>
											<p>Dim-Jeu : 8:00am - 5:00pm <br/>Samedi est fermé</p>
										</div>
									</div>
								</div>
							</div>
							<div class="b-contacts__address-info">
								<h2 class="s-titleDet wow zoomInUp" data-wow-delay="0.5s">opening hours</h2>
								<address class="b-contacts__address-info-main wow zoomInUp" data-wow-delay="0.5s">
									<div class="b-contacts__address-info-main-item">
										<span class="fa fa-home"></span>
										ADDRESS
										<p> {{setting('general-info.admin_adress')}}.</p>
									</div>
									<div class="b-contacts__address-info-main-item">
										<div class="row">
											<div class="col-lg-3 col-md-4 col-xs-12">
												<span class="fa fa-phone"></span>
												Tel
											</div>
											<div class="col-lg-9 col-md-8 col-xs-12">
												<em> {{setting('general-info.admin_tel')}}.</em>
											</div>
										</div>
									</div>
									<div class="b-contacts__address-info-main-item">
										<div class="row">
											<div class="col-lg-3 col-md-4 col-xs-12">
												<span class="fa fa-fax"></span>
												Fax
											</div>
											<div class="col-lg-9 col-md-8 col-xs-12">
												<em>{{setting('general-info.admin_fax')}}.</em>
											</div>
										</div>
									</div>
									<div class="b-contacts__address-info-main-item">
										<div class="row">
											<div class="col-lg-3 col-md-4 col-xs-12">
												<span class="fa fa-envelope"></span>
												Email
											</div>
											<div class="col-lg-9 col-md-8 col-xs-12">
												<em>{{setting('general-info.admin_email')}}.</em>
											</div>
										</div>
									</div>
								</address>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--b-contacts-->

		

@endsection