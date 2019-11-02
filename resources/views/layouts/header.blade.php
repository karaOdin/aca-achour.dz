        <nav class="b-nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-xs-4">
                        <div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">
                            <img src="/storage/{{setting('site.logo')}}" width="36%" height="auto">
                        </div>
                    </div>
                    <div class="col-sm-10 col-xs-8">
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
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle='dropdown' href="#">Activities <span class="fa fa-caret-down"></span></a>
                                        <ul class="dropdown-menu h-nav">
                                            @foreach($bars as $actbar)
                                            <li><a href="{{route('products.index',['activity'=>$actbar->slug])}}">{{$actbar->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li><a href="{{route('projects.index')}}">Promotion Immobilier</a></li>
                                    <li><a href="{{url('about')}}">A Propos</a></li>
                                    

                                    

                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav><!--b-nav-->
