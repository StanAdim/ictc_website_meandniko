<header class="col-12 px-0">
    <!-- top middle -->
    <div class="col-12  px-0">
        <div class="col-md-10 offset-md-1 col-xs-12 col-sm-12 mb-2 mt-0 top-middle">
            <div class="row px-xs-2">
                <div class="col-md-2 col-sm-2 col-xs-2 col-2 float-left text-left pt-1 my-auto">
                    <a href="#">
                        <img src="{{ URL::asset(url('images/tanzania-logo.png'))}}" alt="emblem" class="mx-auto img-fluid emblem">
                    </a>
                </div>

                <div class="col-md-8 col-sm-8 col-xs-8 col-8 text-center pt-3 pt-xs-0 my-auto">
                    <h3 class="mb-2 title title-main">THE UNITED REPUBLIC OF TANZANIA</h3>
                    <h6 class="title-desc">
                        <strong>INFORMATION AND COMMUNICATION TECHNOLOGIES COMMISSION</strong>
                    </h6>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-2 col-2 text-right client-logo pt-1 pr-1 my-auto">
                    <img src="{{ URL::asset(url('images/ictc-logo.png'))}}" alt="ICTC Logo" class="img-fluid"></div>
            </div>
        </div>
    </div>
    <!-- /top middle -->

    <!-- top bottom -->
    <div class="col-12 px-0 px-xs-1">
        <div class="col-12 px-0 top-fixed top-bottom">
            <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed"
                 data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                 data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
                 data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                 data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
                 data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="118px"
                 data-xl-stick-up-offset="118px" data-xxl-stick-up-offset="118px" data-stick-up="false"
                 data-sm-stick-up="false" data-md-stick-up="false" data-lg-stick-up="false" data-xl-stick-up="false"
                 data-xxl-stick-up="false">
                <div class="rd-navbar-aside-outer">
                    <div class="rd-navbar-aside">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1">
                                <span></span></button>
                            <!-- RD Navbar Brand-->
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item {{ request()->routeIs('frontend.home') ? 'active' : ''  }}"><a class="rd-nav-link" href="{{route('frontend.home')}}">Home</a></li>
                                <li class="rd-nav-item {{ request()->url() == url('/about') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('frontend.page', 'about')}}">About</a></li>
                                <li class="rd-nav-item {{ request()->url() == url('/ict-promotion') ? 'active' : ''  }}"><a class="rd-nav-link" href="{{route('frontend.page', 'ict-promotion')}}">ICT PROMOTION</a></li>
                                <li class="rd-nav-item {{ request()->routeIs('frontend.investments') ? 'active' : ''  }}"><a class="rd-nav-link" href="{{route('frontend.investments')}}">ICT INVESTMENT</a></li>

                                <li class="rd-nav-item">
                                    <a class="rd-nav-link" href="#">SERVICES</a>
                                    <!-- RD Navbar Dropdown-->
                                    <ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('frontend.page', 'ict-professional')}}">ICT PROFESSIONAL</a>
                                        </li>
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('digitalAccerationIndex')}}">IMBEJU ACCELERATION</a>
                                        </li>  

                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="https://iprs.ictc.go.tz/index.php/login" target="_blank">IPRS</a>
                                        </li>
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="https://taic.ictc.go.tz/" target="_blank">TAIC</a>
                                        </li>
                                        
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('frontend.page', 'training')}}">TRAINING</a>
                                        </li>

                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('innovationStartup')}}">REGISTER STARTUP</a>
                                        </li>  

                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('innovationProject')}}">REGISTER PROJECT</a>
                                        </li>

                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('frontend.page', 'ict-research')}}">ICT RESEARCH</a>
                                        </li>
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('frontend.page', 'fab-lab')}}">FAB LAB</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="rd-nav-item">
                                    <a class="rd-nav-link" href="#">Publication</a>
                                    <!-- RD Navbar Dropdown-->
                                    <ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('frontend.news')}}">NEWS</a>
                                        </li>
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('frontend.events')}}">EVENTS</a>
                                        </li>
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('RegisteredEntities')}}">REGISTERED STARTUPS</a>
                                        </li>
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('innovationProjects')}}">REGISTERED PROJECTS</a>
                                        </li>
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('frontend.awards')}}">AWARDS</a>
                                        </li>
                                        {{--<li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="{{route('frontend.registrations')}}">REGISTRATION</a>
                                        </li>
                                        <li class="rd-dropdown-item">--}}
                                            {{--<a class="rd-dropdown-link" href="single-event.html">PHOTO GALLERY</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="rd-dropdown-item">--}}
                                            {{--<a class="rd-dropdown-link" href="city-history.html">VIDEO GALLERY</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </li>

                                <li class="rd-nav-item {{ request()->routeIs('frontend.contact') ? 'active' : ''  }}"><a class="rd-nav-link" href="{{route('frontend.contact')}}">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- /top bottom -->
    <!-- </div> -->
</header>