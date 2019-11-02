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
                                <em> {{setting('general-info.admin_adress')}}.</em>
                            </div>
                            <div class="b-info__contacts-item">
                                <span class="fa fa-phone"></span>
                                <em>Phone:  {{setting('general-info.admin_tel')}}</em>
                            </div>
                            <div class="b-info__contacts-item">
                                <span class="fa fa-fax"></span>
                                <em>FAX: {{setting('general-info.admin_fax')}}</em>
                            </div>
                            <div class="b-info__contacts-item">
                                <span class="fa fa-envelope"></span>
                                <em>Email:  {{setting('general-info.admin_email')}}</em>
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
                                <img src="/storage/{{setting('site.logo')}}" width="21%">
                            </div>
                            <p> Tous les droits reservé  &copy; {{ now()->year }} <a href="https://aca-achour.dz/">ACA Achours.</a> </p>
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
                                    <li><a href="/">Accueil</a></li>
                                    <li><a href="{{route('projects.index')}}">Projets</a></li>
                                    <li><a href="{{route('products.index')}}">Produits</a></li>
                                    <li><a href="{{url('about')}}">A Propos</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--b-footer-->

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
