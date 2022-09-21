@extends('frontend.layout.main', ['title' => 'Dashboard', 'header' => 'Dashboard'])
@section('content')
    <section class="section section-lg pt-4">
        <div class="container">
            <div class="row row-50 justify-content-center justify-content-lg-between align-items-center align-items-xl-start">
                <div class="col-md-10 col-lg-6 col-xl-5">
                    @php
                        $awards_section = \App\Models\Section::where('slug', 'awards-section')->first();
                    @endphp
                    @if($awards_section)
                        @php
                            $lang = App\Helpers\Helper::currentLanguage();
                            $title = 'title_'.$lang->code;
                            $description = 'description_'.$lang->code;
                        @endphp
                        <div class="inset-left-2">
                            <h3>{{$awards_section->$title}}</h3>
                            {!! $awards_section->$description !!}
                            {{--<a class="button button-primary button-winona" href="#" style="min-width: 230px;"><div class="content-original">Read more</div><div class="content-dubbed">Read more</div></a>--}}
                        </div>
                    @else
                        @if(\Illuminate\Support\Facades\Auth::user())
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center">Add Section with <strong><i>awards-section</i></strong> slug here with title, description, link url and link title only</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
                <div class="col-md-10 col-lg-6">
                    <img class="img img-thumbnail img-responsive" src="{{url('images/award.png')}}" alt="" width="570" height="400"/>
                </div>
            </div>
        </div>
    </section>
    @if(count($awards) > 0)
        <!-- Latest Blog Posts-->
        <section class="section section-lg bg-gray-100 text-center">
            <div class="container">
                <h3 class="wow-outer wow-outer-dark text-center pt-4">
                    <span class="wow slideInDown">Upcoming Awards</span>
                </h3>
                <div class="row">
                    @php
                        $title_var = "title_" . App\Helpers\Helper::currentLanguage()->code;
                        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
        
                        $description_var = "description_" . App\Helpers\Helper::currentLanguage()->code;
                        $description_var2 = "description_" . env('DEFAULT_LANGUAGE');
                    @endphp
                    @foreach($awards as $award)
                        <div class="col-md-6 wow-outer mt-4">
                            <!-- Post Modern-->
                            <article class="post-modern wow fadeIn">
                                <a class="post-modern-media" href="{{route('frontend.awards.single', $award->slug)}}">
                                    <img src="{{url('uploads/awards/'.$award->file_sw)}}" alt="" width="570" height="352"/>
                                </a>
                                <h4 class="post-modern-title">
                                    <a href="{{route('frontend.awards.single', $award->slug)}}">{{$award->$title_var ?? $title_var2}}</a>
                                </h4>
                                <ul class="post-modern-meta">
                                    <li>by ICTC</li>
                                    <li>
                                        <time datetime="{{\Carbon\Carbon::parse($award->created_at)->year}}">
                                            Deadline : {{\Carbon\Carbon::parse($award->application_deadline)->format('M d, Y \a\t h:i A')}}<br/>
                                            {{--Award Date &nbsp;&nbsp;&nbsp;&nbsp;:--}}
                                            {{--{{\Carbon\Carbon::parse($award->award_date)->format('M d, Y')}}<br/>--}}
                                        </time>
                                    </li>
                                    <li>
                                        <a class="button-winona" href="#">Award</a>
                                    </li>
                                </ul>
                                <p class="wow-outer-dark">{{ substr(strip_tags($award->$description_var ?? $description_var2),0,150) }}....</p>
                            </article>
                        </div>
                    @endforeach
                </div>

                <div class="wow-outer button-outer">
                    {!! $awards->links('frontend.includes.pagination.custom') !!}
                </div>
            </div>
        </section>
    @endif
@endsection
@push('after-scripts')
@endpush

@push('after-styles')
@endpush