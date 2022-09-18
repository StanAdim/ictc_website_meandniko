@extends('frontend.layout.main', ['title' => 'Award', 'header' => 'Award'])
@section('content')
    @php
        $title_var = "title_" . App\Helpers\Helper::currentLanguage()->code;
        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');

        $file_var = "file_" . App\Helpers\Helper::currentLanguage()->code;
        $file_var2 = "file_" . env('DEFAULT_LANGUAGE');

        $description_var = "description_" . App\Helpers\Helper::currentLanguage()->code;
        $description_var2 = "description_" . env('DEFAULT_LANGUAGE');
    @endphp

    <section class="section section-lg mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="post-creative">
                        <h3 class="post-creative-title">
                            {{$award->$title_var ?? $title_var2}}
                        </h3>
                        <ul class="post-creative-meta">
                            <li>
                                <span class="icon mdi mdi-calendar-clock"></span>
                                <time datetime="{{\Carbon\Carbon::parse($award->created_at)->year}}">
                                    {{\Carbon\Carbon::parse($award->created_at)->format('M d, Y \a\t h:i A')}}
                                </time>
                            </li>
                            <li>
                                <span class="icon mdi mdi-tag-multiple"></span>
                                <a href="#">Awards</a>
                            </li>
                        </ul>

                        <img class="img img-responsive" src="{{url('uploads/awards/'.$award->$file_var ?? $file_var2)}}" alt=""/>

                        {!! $award->$description_var ?? $description_var2 !!}
                        <ul class="post-creative-footer">
                            <li>Share this post!</li>
                            <li>
                                <div class="group group-xs group-middle"><a class="icon icon-sm icon-creative mdi mdi-facebook" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-twitter" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-instagram" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-google" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-linkedin" href="#"></a></div>
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-lg-4">
                    <!-- Profile Thin-->
                    <article class="profile-thin">
                        <div class="profile-thin-main">
                            <p class="profile-thin-title">Extra Details</p>
                        </div>

                        <div class="blog-layout-aside-item">
                            <p class="blog-layout-aside-title">Contacts</p>
                            <ul class="list-marked">
                                <li>{{$award->contact_name}}</li>
                                <li>{{$award->contact_phone}}</li>
                                <li>{{$award->contact_email}}</li>
                            </ul>
                        </div>

                        @if($award->award_venue)
                            <div class="blog-layout-aside-item">
                                <p class="blog-layout-aside-title">Venue</p>
                                <ul class="list-marked">
                                    <li>{{$award->award_venue}}</li>
                                </ul>
                            </div>
                        @endif
                        @if($award->application_deadline)
                            <div class="blog-layout-aside-item">
                                <p class="blog-layout-aside-title">Application Deadline</p>
                                <ul class="list-marked">
                                    <li>{{\Carbon\Carbon::parse($award->application_deadline)->format('M d, Y \a\t h:i A')}}</li>
                                </ul>
                            </div>
                        @endif

                        @if($award->award_date)
                            <div class="blog-layout-aside-item">
                                <p class="blog-layout-aside-title">Award Date</p>
                                <ul class="list-marked">
                                    <li>{{\Carbon\Carbon::parse($award->award_date)->format('M d, Y \a\t h:i A')}}</li>
                                </ul>
                            </div>
                        @endif
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xs bg-primary text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-12">
                    <div class="box-cta-thin">
                        <h4 class="wow-outer">
                            <span class="wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                                Are you Startup <span class="font-weight-bold">Company</span>? This Award may be for you
                            </span>
                        </h4>
                        <div class="wow-outer button-outer">
                            <a class="button button-white button-winona wow slideInLeft" href="#" style="visibility: visible; animation-name: slideInLeft;">
                                <div class="content-original">Apply Now</div>
                                <div class="content-dubbed">Apply Now</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('after-scripts')
@endpush

@push('after-styles')
@endpush