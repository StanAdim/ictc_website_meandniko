@extends('frontend.layout.main', ['title' => 'Registration', 'header' => 'Registration'])
@section('content')
    <section class="section section-lg pt-4">
        <div class="container">
            @include('frontend.includes._alert')
            <div class="row row-50 justify-content-center justify-content-lg-between align-items-center align-items-xl-start">
                <div class="col-md-10 col-lg-6 col-xl-6">
                    @php
                        $awards_section = \App\Models\Section::where('slug', 'registration-section')->first();
                        $file = null;
                    @endphp
                    @if($awards_section)
                        @php
                            $lang = App\Helpers\Helper::currentLanguage();
                            $title = 'title_'.$lang->code;
                            $description = 'description_'.$lang->code;
                            if ($awards_section->file_sw || $awards_section->file_en) {
                                $file = 'file_'.$lang->code;
                            }
                        @endphp
                        <div class="inset-left-2">
                            <h3>{{$awards_section->$title}}</h3>
                            {!! $awards_section->$description !!}
                        </div>
                    @else
                        @if(\Illuminate\Support\Facades\Auth::user())
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center">Add Section with <strong><i>registration-section</i></strong> slug here with title, description, link url and link title only</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                </div>

                @if($file)
                    <div class="col-md-10 col-lg-6">
                        <img class="img img-thumbnail img-responsive" src="{{url('uploads/sections/'.$file)}}" alt="" width="570" height="400"/>
                    </div>
                @endif
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
                                Are you Startup, Hub or Accelerator?
                            </span>
                        </h4>
                        <div class="wow-outer button-outer">
                            <a class="button button-white button-winona wow slideInLeft" href="{{route('frontend.registration.register')}}" style="visibility: visible; animation-name: slideInLeft;">
                                <div class="content-original">Register</div>
                                <div class="content-dubbed">Register</div>
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