@extends('frontend.layout.main', ['title' => 'Dashboard', 'header' => 'Dashboard'])
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
                            {{$post->$title_var ?? $title_var2}}
                        </h3>
                        <ul class="post-creative-meta">
                            <li>
                                <span class="icon mdi mdi-calendar-clock"></span>
                                <time datetime="{{\Carbon\Carbon::parse($post->created_at)->year}}">
                                    {{\Carbon\Carbon::parse($post->created_at)->format('M d, Y \a\t h:i A')}}
                                </time>
                            </li>
                            <li>
                                <span class="icon mdi mdi-tag-multiple"></span>
                                <a href="#">News</a>
                            </li>
                        </ul>

                        <img class="img img-responsive" src="{{url('uploads/posts/'.$post->$file_var ?? $file_var2)}}" alt=""/>

                        {!! $post->$description_var ?? $description_var2 !!}
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
                            <p class="profile-thin-title">ICTC Administrator</p>
                            <div class="group group-xs group-middle">
                                <a class="icon icon-sm icon-creative mdi mdi-facebook" href="#"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-twitter" href="#"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-instagram" href="#"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-google" href="#"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-linkedin" href="#"></a>
                            </div>
                            <a class="button button-sm button-primary-outline button-winona" href="{{route('frontend.contact')}}">Contact Us</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('after-scripts')
@endpush

@push('after-styles')
@endpush