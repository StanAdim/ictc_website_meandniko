@extends('frontend.layout.main', ['title' => 'Home', 'header' => 'Home'])
@section('content')
    @include('frontend.includes.slider')

    <section class="content-row-no-bg home-welcome">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-lg-8 col-xl-8">
                <h3 class="wow-outer">
                    <span class="wow slideInDown" style="visibility: visible; animation-name: slideInDown; text-align: center">
                        Welcome to ICT Commission
                    </span>
                </h3>

                <p class="wow-outer offset-top-3">
                    <span class="wow slideInDown" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.05s; animation-name: slideInDown;">
                        It is a long established fact that a reader will be distracted by the readable content of a page.It is a long established fact that a reader will be distracted by the readable content of a page.It is a long established fact that a reader will be distracted by the readable content of a page.It is a long established fact that a reader will be distracted by the readable content of a page.It is a long established fact that a reader will be distracted by the readable content of a page.
                    </span>
                </p>
            </div>
            </div>
        </div>
    </section>

    @if (count($leaders))
    <section class="section section-lg py-4">
        <div class="container">
            <h3 class="text-center">Our Leaders</h3>

            <div class="row mt-2">
                @php
                    $title = 'title_'.App\Helpers\Helper::currentLanguage()->code;
                    $position = 'position_'.App\Helpers\Helper::currentLanguage()->code;
                    $file = 'file_'.App\Helpers\Helper::currentLanguage()->code;
                @endphp
                @foreach($leaders as $leader)
                <div class="col-md-4">
                    <div class="row m-1">
                        <a href="">
                            <div class="col-md-12 p-0">
                                <img src="{{url('uploads/leaders/'.$leader->$file)}}"
                                     alt="{{$leader->$title}}" class="w-100 w-xs-75 img img-thumbnail img-responsive b-5">
                            </div>
                            <div class="col-md-12 text-center my-2">
                                <h6 class="text-bold font-15">{{$leader->$title}}</h6>
                                <span class="font-14">{{$leader->$position}}</span> <br>
                                <button class="button button-sm button-primary mt-0">Tazama Wasifu</button>
                            </div>
                        </a>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
    @endif
    <!-- Event section-->
    <section class="section-lg text-center">
        <div class="container">
            <h3 class="wow-outer wow-outer-dark"><span class="wow slideInUp">Latest Event</span></h3>
            <div class="row row-50 offset-top-2">
                <div class="col-sm-6 col-lg-3">
                    <!-- Thumbnail Light-->
                    <article class="thumbnail-light">
                        <a class="thumbnail-light-media" href="single-service.html">
                            <img class="thumbnail-light-image" src="images/government-3-270x300.jpg" alt="" width="270" height="300"/>
                        </a>
                        <h5 class="thumbnail-light-title">
                            <a href="single-service.html">City Council</a>
                        </h5>
                    </article>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <!-- Thumbnail Light-->
                    <article class="thumbnail-light"><a class="thumbnail-light-media" href="single-service.html"><img
                                    class="thumbnail-light-image" src="images/government-1-270x300.jpg" alt="" width="270"
                                    height="300"/></a>
                        <h5 class="thumbnail-light-title"><a href="single-service.html">Agendas & Minutes</a></h5>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Thumbnail Light-->
                    <article class="thumbnail-light"><a class="thumbnail-light-media" href="single-service.html"><img
                                    class="thumbnail-light-image" src="images/government-2-270x300.jpg" alt="" width="270"
                                    height="300"/></a>
                        <h5 class="thumbnail-light-title"><a href="single-service.html">Boards & Commissions</a></h5>
                    </article>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <!-- Thumbnail Light-->
                    <article class="thumbnail-light"><a class="thumbnail-light-media" href="single-service.html"><img
                                    class="thumbnail-light-image" src="images/government-5-270x300.jpg" alt="" width="270"
                                    height="300"/></a>
                        <h5 class="thumbnail-light-title"><a href="single-service.html">Elections and Voting</a></h5>
                    </article>
                </div>
            </div>
        </div>
        <div class="wow-outer button-outer"><a
                    class="button button-primary-outline button-winona offset-top-2 wow slideInUp" href="services.html">View
                All Events</a></div>
    </section>

    <!-- Centered CTA-->
    <section class="section section-1 bg-primary text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-lg-7 col-xl-6">
                    <h3 class="wow-outer">
                        <span class="wow slideInDown">
                            Support Our Government <br>
                            <span class="font-weight-bold">to Transform ICT Industry</span>
                        </span>
                    </h3>
                    <p class="wow-outer offset-top-3">
                        <span class="wow slideInDown" data-wow-delay=".05s">
                            You can make your own contribution to the development of our county ICT infrastructure and write its history with us.
                        </span>
                    </p>
                    <div class="wow-outer button-outer">
                        <a class="button button-white button-winona wow slideInDown" href="#" data-wow-delay=".1s">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Posts-->
    <section class="section section-lg text-center">
        <div class="container">
            <h3 class="wow-outer wow-outer-dark text-center">
                <span class="wow slideInDown">Latest News</span>
            </h3>
            <div class="row row-50">
                <div class="col-md-6 wow-outer">
                    <!-- Post Modern-->
                    <article class="post-modern wow fadeIn">
                        <a class="post-modern-media" href="single-blog-post.html">
                            <img src="images/grid-blog-5-570x352.jpg" alt="" width="570" height="352"/>
                        </a>
                        <h4 class="post-modern-title">
                            <a href="single-blog-post.html">Interview With the Governor</a>
                        </h4>
                        <ul class="post-modern-meta">
                            <li>by Theresa Barnes</li>
                            <li>
                                <time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
                            </li>
                            <li>
                                <a class="button-winona" href="#">News</a>
                            </li>
                        </ul>
                        <p class="wow-outer-dark">Ann Smith, one of the most prominent journalists of our city, has
                            recently spoken to our governor, John Porter. In this article, we publish the text version
                            of the interview. To watch the video....</p>
                    </article>
                </div>
                <div class="col-md-6 wow-outer">
                    <!-- Post Modern-->
                    <article class="post-modern wow fadeIn">
                        <a class="post-modern-media" href="single-blog-post.html">
                            <img src="images/grid-blog-6-570x352.jpg" alt="" width="570" height="352"/>
                        </a>
                        <h4 class="post-modern-title">
                            <a href="single-blog-post.html">Freedom of Speech: Essential Principles</a>
                        </h4>
                        <ul class="post-modern-meta">
                            <li>by Theresa Barnes</li>
                            <li>
                                <time datetime="2018">Apr 21, 2018 at 12:05 pm</time>
                            </li>
                            <li><a class="button-winona" href="#">News</a></li>
                        </ul>
                        <p class="wow-outer-dark">
                            Freedom of expression is considered one of the most fundamental of all
                            freedoms. While it is of dubious value to rate one freedom over another, freedom of
                            expression is...
                        </p>
                    </article>
                </div>
            </div>

            <div class="wow-outer button-outer">
                <a class="button button-primary-outline button-winona wow slideInUp" href="grid-blog.html">
                    View All News
                </a>
            </div>
        </div>
    </section>
@endsection
@push('after-scripts')
    <script src="{{ URL::asset(url('js/flexslider/jquery.flexslider.js'))}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            "use strict";
            $('#main-slider').flexslider({
                namespace           : "flex-",           //{NEW} String: Prefix string attached to the class of every element generated by the plugin
                selector            : ".slides > li",    //{NEW} Selector: Must match a simple pattern. '{container} > {slide}' -- Ignore pattern at your own peril
                animation           : "fade",            //String: Select your animation type, "fade" or "slide"
                easing              : "swing",           //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
                direction           : "horizontal",      //String: Select the sliding direction, "horizontal" or "vertical"
                reverse             : false,             //{NEW} Boolean: Reverse the animation direction
                animationLoop       : true,              //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
                smoothHeight        : false,             //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
                startAt             : 0,                 //Integer: The slide that the slider should start on. Array notation (0 = first slide)
                slideshow           : true,              //Boolean: Animate slider automatically
                slideshowSpeed      : 7000,              //Integer: Set the speed of the slideshow cycling, in milliseconds
                animationSpeed      : 600,               //Integer: Set the speed of animations, in milliseconds
                initDelay           : 0,                 //{NEW} Integer: Set an initialization delay, in milliseconds
                randomize           : false,             //Boolean: Randomize slide order

                // Usability features
                pauseOnAction       : true,              //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
                pauseOnHover        : false,             //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
                useCSS              : true,              //{NEW} Boolean: Slider will use CSS3 transitions if available
                touch               : true,              //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
                video               : false,             //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches

                // Primary Controls
                controlNav          : true,              //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
                directionNav        : true,              //Boolean: Create navigation for previous/next navigation? (true/false)
                prevText            : "Previous",        //String: Set the text for the "previous" directionNav item
                nextText            : "Next",            //String: Set the text for the "next" directionNav item

                // Secondary Navigation
                keyboard            : true,              //Boolean: Allow slider navigating via keyboard left/right keys
                multipleKeyboard    : false,             //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
                mousewheel          : false,             //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
                pausePlay           : false,             //Boolean: Create pause/play dynamic element
                pauseText           : 'Pause',           //String: Set the text for the "pause" pausePlay item
                playText            : 'Play',            //String: Set the text for the "play" pausePlay item

                // Special properties
                controlsContainer   : "",                //{UPDATED} Selector: USE CLASS SELECTOR. Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be ".flexslider-container". Property is ignored if given element is not found.
                manualControls      : "",                //Selector: Declare custom control navigation. Examples would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
                sync                : "",                //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
                asNavFor            : "",                //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider
            });
        });
    </script>
@endpush

@push('after-styles')
    <link rel="stylesheet" href="{{ URL::asset(url('css/flexslider.css'))}}" id="main-styles-link">
@endpush