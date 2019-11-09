@extends('layouts.app')
@section('content')
@section('title', 'Accueil')

<style type="text/css">

    .b-featured__item .m-premium 
    {
        right:183px;
    }


</style>
		<section class="b-slider"> 
            <div id="carousel" class="slide carousel carousel-fade">
                <div class="carousel-inner">
                    
                    <?php $p = 1; ?>
                    @foreach($homeSliders as $homeSlider)
                    <div class="item  <?php $p ==1 ? print('active') : print(''); $p++; ?>">
                        <img src="/storage/{{$homeSlider->image_slider}}" alt="sliderImg" />
                        <div class="container">
                            <div class="carousel-caption b-slider__info">
                                <h3>{{$homeSlider->secondary_text}}</h3>
                                <h2>{{$homeSlider->main_text}}</h2>
                                <p>{{$homeSlider->smail_text}} 
                                    @if(!is_null($homeSlider->price))
                                    <span>DA {{$homeSlider->price}}</span>
                                    @endif
                                </p>
                                <a class="btn m-btn" href="{{$homeSlider->link}}">voir les détails<span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                </div>
                <a class="carousel-control right" href="#carousel" data-slide="next">
                    <span class="fa fa-angle-right m-control-right"></span>
                </a>
                <a class="carousel-control left" href="#carousel" data-slide="prev">
                    <span class="fa fa-angle-left m-control-left"></span>
                </a>
            </div>
        </section><!--b-slider-->

    

        <section class="b-featured">
            <div class="container">
                <h2 class="s-title wow zoomInUp" data-wow-delay="0.3s">Produits Présentés</h2>
                <div id="carousel-small" class="owl-carousel enable-owl-carousel" data-items="4" data-navigation="true" data-auto-play="true" data-stop-on-hover="true" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-tablet-small="2">
                    @foreach($products as $product)
                    <div>
                        <div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
                            <a href="{{route('products.show', $product->slug)}}">
                                <img src="/storage/{{$product->main_image}}" style="width: 186px;height: 113px" alt="mers" />
                                <span class="m-leasing">New</span>
                                @if($product->discount == 'On')
                                <span class="m-premium">%{{$product->discount_value}}</span>
                                @endif
                            </a>
                            @if($product->discount == 'On')
                            <div class="b-featured__item-price">
                                DA {{$product->price *( 100 - $product->discount_value)/100}}
                            </div>
                            <div style="margin: 5px">
                                <del><h2>DA {{$product->price}}</h2> </del>
                            </div>
                            @else
                            <div class="b-featured__item-price">
                                DA {{$product->price}}
                            </div>
                            @endif
                            <div class="clearfix"></div>
                            <h5><a href="{{route('products.show', $product->slug)}}">{{$product->name}}</a></h5>
                            <div class="b-featured__item-count"><span class="fa fa-list-alt"></span><a href="{{route('products.index', ['category'=>$product->category->slug])}}">{{$product->category->name}}</a></div>
                           
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </section><!--b-featured-->

        <section class="b-welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
                        <div class="b-welcome__text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100">
                            <h2>{{setting('home-description.admin_description_slogon')}}</h2>
                            {!! setting('home-description.admin_description') !!}
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="b-welcome__services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100">
                            <div class="row">
                                <div class="col-xs-6 m-padding">
                                    <div class="b-welcome__services-auto">
                                        <div class="b-welcome__services-img m-auto">
                                            <span class="fa fa-cab"></span>
                                        </div>
                                        <h3>Vehicules Neuf</h3>
                                    </div>
                                </div>
                                <div class="col-xs-6 m-padding">
                                    <div class="b-welcome__services-trade">
                                        <div class="b-welcome__services-img m-trade">
                                            <span class="fa fa-male"></span>
                                        </div>
                                        <h3>Trade-Ins</h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 text-center">
                                    <span class="b-welcome__services-circle"></span>
                                </div>
                                <div class="col-xs-6 m-padding">
                                    <div class="b-welcome__services-buying">
                                        <div class="b-welcome__services-img m-buying">
                                            <span class="fa fa-book"></span>
                                        </div>
                                        <h3>GUIDE D'ACHAT</h3>
                                    </div>
                                </div>
                                <div class="col-xs-6 m-padding">
                                    <div class="b-welcome__services-support">
                                        <div class="b-welcome__services-img m-support">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="45px" height="45px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                                                <g>
                                                    <path d="M257.938,336.072c0,17.355-14.068,31.424-31.423,31.424c-17.354,0-31.422-14.068-31.422-31.424
                                                        c0-17.354,14.068-31.423,31.422-31.423C243.87,304.65,257.938,318.719,257.938,336.072z M385.485,304.65
                                                        c-17.354,0-31.423,14.068-31.423,31.424c0,17.354,14.069,31.422,31.423,31.422c17.354,0,31.424-14.068,31.424-31.422
                                                        C416.908,318.719,402.84,304.65,385.485,304.65z M612,318.557v59.719c0,29.982-24.305,54.287-54.288,54.287h-39.394
                                                        C479.283,540.947,379.604,606.412,306,606.412s-173.283-65.465-212.318-173.85H54.288C24.305,432.562,0,408.258,0,378.275v-59.719
                                                        c0-20.631,11.511-38.573,28.46-47.758c0.569-84.785,25.28-151.002,73.553-196.779C149.895,28.613,218.526,5.588,306,5.588
                                                        c87.474,0,156.105,23.025,203.987,68.43c48.272,45.777,72.982,111.995,73.553,196.779C600.489,279.983,612,297.925,612,318.557z
                                                        M497.099,336.271c0-13.969-0.715-27.094-1.771-39.812c-24.093-22.043-67.832-38.769-123.033-44.984
                                                        c7.248,8.15,13.509,18.871,17.306,32.983c-33.812-26.637-100.181-20.297-150.382-79.905c-2.878-3.329-5.367-6.51-7.519-9.417
                                                        c-0.025-0.035-0.053-0.062-0.078-0.096l0.006,0.002c-8.931-12.078-11.976-19.262-12.146-11.31
                                                        c-1.473,68.513-50.034,121.925-103.958,129.46c-0.341,7.535-0.62,15.143-0.62,23.08c0,28.959,4.729,55.352,12.769,79.137
                                                        c30.29,36.537,80.312,46.854,124.586,49.59c8.219-13.076,26.66-22.205,48.136-22.205c29.117,0,52.72,16.754,52.72,37.424
                                                        c0,20.668-23.604,37.422-52.72,37.422c-22.397,0-41.483-9.93-49.122-23.912c-30.943-1.799-64.959-7.074-95.276-21.391
                                                        C198.631,535.18,264.725,568.41,306,568.41C370.859,568.41,497.099,486.475,497.099,336.271z M550.855,264.269
                                                        C547.4,116.318,462.951,38.162,306,38.162S64.601,116.318,61.145,264.269h20.887c7.637-49.867,23.778-90.878,48.285-122.412
                                                        C169.37,91.609,228.478,66.13,306,66.13c77.522,0,136.63,25.479,175.685,75.727c24.505,31.533,40.647,72.545,48.284,122.412
                                                        H550.855L550.855,264.269z"/>
                                                </g>
                                            </svg>

                                        </div>
                                        <h3>SUPPORT 24/7</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--b-welcome-->

       

        <section class="b-asks">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
                        <div class="b-asks__first wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">
                            <div class="b-asks__first-circle">
                                <span class="fa fa-car"></span>
                            </div>
                            <div class="b-asks__first-info">
                                <h2>VOUS CHERCHEZ UNE VOITURE?</h2>
                                <p>Rechercher dans notre inventaire pour une voiture avec plusieurs marques</p>
                            </div>
                            <div class="b-asks__first-arrow">
                                <a href="{{route('products.index')}}"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0">
                        <div class="b-asks__first m-second wow zoomInRight" data-wow-delay="0.3s" data-wow-offset="100">
                            <div class="b-asks__first-circle">
                                <span class="fa fa-building"></span>
                            </div>
                            <div class="b-asks__first-info">
                                <h2>VOUS CHERCHEZ UNE MAISON?</h2>
                                <p>Rechercher Nos projets Avec de nombreuses maisons à plusieurs endroits</p>
                            </div>
                            <div class="b-asks__first-arrow">
                                <a href="{{route('projects.index')}}"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p class="b-asks__call wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">DES QUESTIONS? APPELEZ-NOUS  : <span>{{setting('general-info.admin_tel')}}</span></p>
                    </div>
                </div>
            </div>
        </section><!--b-asks-->


        <section class="b-contact">
            <div class="container">
                <div class="row wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">
                    <div class="col-xs-4">
                        <div class="b-contact-title">
                            <h5>Dernières nouvelles &amp; offres</h5><br />
                            <h2>INSCRIPTION À LA NEWSLETTER</h2>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="b-contact__form">
                            <p>NOUS ENVOYONS DE GRANDES OFFRES ET DES DERNIÈRES NOUVELLES AUTO À NOS UTILISATEURS ABONNÉS CHAQUE SEMAINE. SON GRATUIT POUR SOUSCRIRE AUJOURD'HUI!</p>
                            <form action="/" method="POST">
                                <div><span class="fa fa-user"></span><input type="text" name="user" value="" placeholder="Your Name" /></div>
                                <div><span class="fa fa-envelope"></span><input type="text" name="email" value="" placeholder="Your Email" /></div>
                                <button type="submit"><span class="fa fa-angle-right"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--b-contact-->

        <section class="b-review">
            <div class="container">
                <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                    <div id="carousel-small-rev" class="owl-carousel enable-owl-carousel" data-items="1" data-navigation="true" data-auto-play="true" data-stop-on-hover="true" data-items-desktop="1" data-items-desktop-small="1" data-items-tablet="1" data-items-tablet-small="1">
                        @foreach($quotes as $quote)
                        <div class="b-review__main">
                            <div class="b-review__main-person">
                                <div class="b-review__main-person-inside" style="background:url(/storage/{{$quote->image}}) ">
                                </div>
                            </div>
                            <h5><span>{{$quote->name}}</span>, {{$quote->fonction}}<em>"</em></h5>
                            <p>{{$quote->quote}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <img src="/storage/{{setting('general-info.admin_home_image')}}" alt="" class="img-responsive center-block" />
        </section><!--b-review-->

       

        
@endsection