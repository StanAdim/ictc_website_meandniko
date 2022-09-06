@extends('frontend.layout.main', ['title' => 'Dashboard', 'header' => 'Dashboard'])
@section('content')
    @if(count($posts) > 0)
        <!-- Latest Blog Posts-->
        <section class="section section-lg text-center">
            <div class="container">
                <h3 class="wow-outer wow-outer-dark text-left">
                    <span class="wow slideInDown">News</span>
                </h3>
                <div class="row">
                    @php
                        $title_var = "title_" . App\Helpers\Helper::currentLanguage()->code;
                        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
        
                        $description_var = "description_" . App\Helpers\Helper::currentLanguage()->code;
                        $description_var2 = "description_" . env('DEFAULT_LANGUAGE');
                    @endphp
                    @foreach($posts as $post)
                        <div class="col-md-6 wow-outer mt-4">
                            <!-- Post Modern-->
                            <article class="post-modern wow fadeIn">
                                <a class="post-modern-media" href="{{route('frontend.news.single', $post->slug)}}">
                                    <img src="{{url('uploads/posts/'.$post->file_sw)}}" alt="" width="570" height="352"/>
                                </a>
                                <h4 class="post-modern-title">
                                    <a href="{{route('frontend.news.single', $post->slug)}}">{{$post->$title_var ?? $title_var2}}</a>
                                </h4>
                                <ul class="post-modern-meta">
                                    <li>by ICTC</li>
                                    <li>
                                        <time datetime="{{\Carbon\Carbon::parse($post->created_at)->year}}">
                                            {{\Carbon\Carbon::parse($post->created_at)->format('M d, Y \a\t h:i A')}}
                                        </time>
                                    </li>
                                    <li>
                                        <a class="button-winona" href="#">Investment</a>
                                    </li>
                                </ul>
                                <p class="wow-outer-dark">{{ substr(strip_tags($post->$description_var ?? $description_var2),0,150) }}....</p>
                            </article>
                        </div>
                    @endforeach
                </div>

                <div class="wow-outer button-outer">
                    {!! $posts->links('frontend.includes.pagination.custom') !!}
                </div>
            </div>
        </section>
    @endif
@endsection
@push('after-scripts')
@endpush

@push('after-styles')
@endpush