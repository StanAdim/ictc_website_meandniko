@extends('frontend.layout.main', ['title' => 'Dashboard', 'header' => 'Dashboard'])
@section('content')
    <section class="section section-lg pt-4">
        <div class="container">
            <div class="row row-50 justify-content-center justify-content-lg-between align-items-center align-items-xl-start">
                <div class="col-md-10 col-lg-6 col-xl-5">
                    <h3>Awards</h3>
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                        <!-- Nav tabs-->
                        <ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Mission</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Vision</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Wanufaika</a></li>
                        </ul>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <p>Hercle, boreas fidelis!, teres mensa! Calceuss peregrinatione in emeritis mare! Cur nuclear vexatum iacere prarere?</p>
                                <p>Pulchritudines assimilant! Ferox onus sed mire perderes impositio est. A falsis, zelus nobilis planeta. Fiscinas peregrinatione in antverpia! Brabeuta teres onus est. Pol, peritus poeta! Sunt bursaes examinare secundus, placidus racanaes.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <ul class="list-marked">
                                    <li>Velox animalis aliquando falleres lanista est.</li>
                                    <li>Talis impositios ducunt ad fuga. Bassus, grandis eposs patienter contactus de clemens, domesticus hydra. Hydra, demolitione, et clabulare.</li>
                                    <li>Brevis, albus homos unus magicae de fortis, placidus equiso.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                <ul class="list-marked">
                                    <li>Nunquam manifestum ignigena.</li>
                                    <li>Cum ionicis tormento favere, omnes fluctuies captis regius, grandis monses. Gratis vortexs ducunt ad mons.</li>
                                    <li>Pius, ferox ignigenas velox experientia de alter, raptus racana.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
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