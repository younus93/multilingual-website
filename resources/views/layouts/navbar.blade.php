<div class="header-wrapper">
    <!-- .header.header-style02 start -->
    <header id="header"  class="header-style02">
        <div id="top-bar-wrapper" class="dark clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-9">
                        <ul id="quick-links" class="clearfix">
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>044 42127143</span>
                            </li>

                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="{{url('/contact#contact')}}">Contact us today</a>
                            </li>
                        </ul><!-- .quick links end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6 col-xs-9">
                        <ul id="quick-links">
                            <li>View in</li>
                            <li><a href="{{ url('lang/ta') }}">தமிழ்</a></li>
                            <li><a href="{{ url('lang/en') }}">English</a></li>
                        </ul>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .top-bar-wrapper end -->

        <div class="header-inner">
            <!-- .container start -->
            <div class="container">
                <!-- .main-nav start -->
                <div class="main-nav">
                    <!-- .row start -->
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-default nav-left" role="navigation">

                                <!-- .navbar-header start -->
                                <div class="navbar-header">
                                    <div class="logo">
                                        <a href="{{ url('/') }}">
                                            <img src="img/logo.png" alt="TruckJee - Hire Trucks online"/>
                                        </a>
                                    </div><!-- .logo end -->
                                </div><!-- .navbar-header start -->

                                <!-- MAIN NAVIGATION -->
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="{{ set_active('/') }}">
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>

                                        <li class="{{ set_active('about-us') }}">
                                            <a href="{{ url('/about-us') }}">About</a>
                                        </li>

                                        <li class="{{ set_active('transporters') }}">
                                            <a href="{{ url('/transporters') }}" >Transporters</a>
                                        </li>

                                        <li class="{{ set_active('truck-owners') }}">
                                            <a href="{{url('/truck-owners') }}" >Truck Owners</a>
                                        </li><!-- .dropdown end -->

                                        <li class="{{ set_active('blog') }}">
                                            <a href="{{ url('/blog') }}">Blog</a>
                                        </li><!-- .dropdown end -->

                                        <li class="{{ set_active('careers') }}">
                                            <a href="{{ url('/careers') }}">Careers</a>
                                        </li><!-- .dropdown end -->

                                        <li class="{{ set_active('contact') }}">
                                            <a href="{{ url('/contact') }}">Contact</a>
                                        </li><!-- .dropdown end -->


                                    </ul><!-- .nav.navbar-nav end -->

                                    <!-- RESPONSIVE MENU -->
                                    <div id="dl-menu" class="dl-menuwrapper">
                                        <button class="dl-trigger">Open Menu</button>

                                        <ul class="dl-menu">
                                            <li>
                                                <a href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/about-us') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/transporters') }}">Transporters</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/truck-owners') }}">Truck Owners</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/blog') }}">Blog</a>
                                            </li>
                                            <li><a href="{{ url('/contact') }}">Contact</a></li>

                                        </ul><!-- .dl-menu end -->
                                    </div><!-- #dl-menu end -->
                                </div><!-- MAIN NAVIGATION END -->
                            </nav><!-- .navbar.navbar-default end -->
                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->
                </div><!-- .main-nav end -->
            </div><!-- .container end -->
        </div><!-- .header-inner end -->
    </header><!-- .header.header-style01 -->
</div><!-- .header-wrapper end -->