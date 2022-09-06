<header class="col-12 px-0">
    <!-- top middle -->
    <div class="col-12  px-0">
        <div class="col-md-10 offset-md-1 col-xs-12 col-sm-12 mb-2 mt-0 top-middle">
            <div class="row px-xs-2">
                <div class="col-md-2 col-sm-2 col-xs-2 col-2 float-left text-left pt-1 my-auto">
                    <a href="#">
                        <img src="https://www.ega.go.tz/site/images/emblem.png" alt="emblem" class="mx-auto img-fluid emblem">
                    </a>
                </div>

                <div class="col-md-8 col-sm-8 col-xs-8 col-8 text-center pt-3 pt-xs-0 my-auto">
                    <h3 class="mb-2 title title-main">THE UNITED REPUBLIC OF TANZANIA</h3>
                    <h6 class="title-desc">
                        <strong>INFORMATION AND COMMUNICATION TECHNOLOGY COMMISSION</strong>
                    </h6>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-2 col-2 text-right client-logo pt-1 pr-1 my-auto">
                    <img src="https://www.ictc.go.tz/siteimg/LOGO-02.png" alt="eGA Logo" class="img-fluid"></div>
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
                                <li class="rd-nav-item {{ request()->routeIs('frontend.about') ? 'active' : ''  }}"><a class="rd-nav-link" href="{{route('frontend.about')}}">About</a></li>
                                <li class="rd-nav-item {{ request()->routeIs('frontend.investments') ? 'active' : ''  }}"><a class="rd-nav-link" href="{{route('frontend.investments')}}">ICT INVESTMENT</a></li>
                                {{--<li class="rd-nav-item"><a class="rd-nav-link" href="#"</a>--}}
                                    {{--<!-- RD Navbar Dropdown-->--}}
                                    {{--<ul class="rd-menu rd-navbar-dropdown">--}}
                                        {{--<li class="rd-dropdown-item">--}}
                                            {{--<a class="rd-dropdown-link" href="government.html">Startup Company</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="rd-dropdown-item">--}}
                                            {{--<a class="rd-dropdown-link" href="government.html">Digital Incubation</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="rd-dropdown-item">--}}
                                            {{--<a class="rd-dropdown-link" href="government.html">Digital Accelerators</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}

                                <li class="rd-nav-item">
                                    <a class="rd-nav-link" href="departments.html">SERVICES</a>
                                    <!-- RD Navbar Dropdown-->
                                    <ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="departments.html">ICT PROFESSIONAL</a>
                                        </li>
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="single-department.html">SOFTCENTRE</a>
                                        </li>
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="single-department.html">TRAINING</a>
                                        </li>
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="single-department.html">ICT RESEARCH</a>
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
                                            <a class="rd-dropdown-link" href="single-event.html">PHOTO GALLERY</a>
                                        </li>
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link" href="city-history.html">VIDEO GALLERY</a>
                                        </li>
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