@php
    $lang = App\Helpers\Helper::currentLanguage();
    $title = 'title_'.$lang->code;
    $posts = \App\Models\Post::orderBy('id', 'desc')->take(2)->get();
@endphp
<footer class="section footer-advanced bg-gray-800">
    <div class="footer-advanced-main">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-4">
                    <h4>About Us</h4>
                    <p class="footer-advanced-text">
                        The key mandates of the Information and Communication Technologies Commission (ICTC)
                        as per establishment is to promote and foster investment and development of ICT industry,
                        advise and collaborate with other stakeholders on ICT research and foresight on ICT trends,
                        and building capacity of ICT Professionals in Tanzania.</p>
                </div>
                <div class="col-sm-7 col-md-5 col-lg-4">
                    <h4>Recent News</h4>
                    @foreach($posts as $post)
                    <!-- Post Inline-->
                        <article class="post-inline">
                            <p class="post-inline-title">
                                <a href="{{route('frontend.news.single', $post->slug)}}">{{$post->$title}}</a>
                            </p>
                            <ul class="post-inline-meta">
                                <li>by ICTC</li>
                                <li><a href="{{route('frontend.news.single', $post->slug)}}">{{\Carbon\Carbon::parse($post->start_date)->format('M d, Y')}}</a></li>
                            </ul>
                        </article>
                    @endforeach
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.mawasiliano.go.tz/">Mawasiliano</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.tcra.go.tz/">TCRA</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.ega.go.tz/">EGA</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-advanced-aside">
        <div class="container">
            <div class="footer-advanced-layout">
                <div>
                    <ul class="list-nav">
                        <li><a href="{{route('frontend.home')}}">Home</a></li>
                        <li><a href="{{route('frontend.page', 'about')}}">About</a></li>
                        <li><a href="{{route('frontend.events')}}">Events</a></li>
                        <li><a href="{{route('frontend.news')}}">News</a></li>
                        <li><a href="{{route('frontend.contact')}}">Contacts</a></li>
                    </ul>
                </div>
                <div>
                    <ul class="list-inline list-inline-sm">
                        <li><a class="icon icon-sm link-default mdi mdi-facebook" href="#"></a></li>
                        <li><a class="icon icon-sm link-default mdi mdi-twitter" href="#"></a></li>
                        <li><a class="icon icon-sm link-default mdi mdi-instagram" href="#"></a></li>
                        <li><a class="icon icon-sm link-default mdi mdi-google" href="#"></a></li>
                        {{--<li><a class="icon icon-sm link-default mdi mdi-linkedin" href="#"></a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
    </div>
    <div class="footer-advanced-aside">
        <div class="container">
            <div class="footer-advanced-layout">
                <a class="brand" href="{{route('frontend.home')}}">
                    <img src="{{url('/images/logo-default-125x71.png')}}" alt="" width="83" height="49"
                         srcset="{{url('/images/logo-default-125x71.png')}} 2x"/>
                </a>
                <!-- Rights-->
                <p class="rights">
                    <span>&copy;</span>
                    <span class="copyright-year"></span>
                    <span>&nbsp;</span>
                    <span>ICTC, All Rights Reserved. Powered by
                        <a target="_blank" href="https://www.wavesleek.co.tz">Wavesleek</a>
                    </span>
                    <!--<span>&nbsp;</span><br class="d-sm-none"/>-->
                    <!--<a href="terms-of-use.html">Terms of Use</a>-->
                    <!--<span> and</span>-->
                    <!--<span>&nbsp;</span>-->
                    <!--<a href="#">Privacy Policy</a>-->
                </p>
            </div>
        </div>
    </div>
</footer>