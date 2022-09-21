<?php
$lang = App\Helpers\Helper::currentLanguage();
$title_var = "title_" . $lang->code;
$title_var2 = "title_" . env('DEFAULT_LANGUAGE');

$position_var = "position_" . $lang->code;
$position_var2 = "position_" . env('DEFAULT_LANGUAGE');

$description_var = "details_" . $lang->code;
$description_var2 = "details_" . env('DEFAULT_LANGUAGE');

$title = $title_var ?? $title_var2;
$position = $position_var ?? $position_var2;
$description = $description_var ?? $description_var2;

$file = 'file_'.$lang->code;

?>
@extends('frontend.layout.main', ['title' => $title_var ?? $title_var2, 'header' => $title_var ?? $title_var2])
@section('content')
    <section class="section section-md">
        <div class="container">
            <!-- Profile Modern-->
            <article class="profile-modern">
                <div class="profile-modern-figure">
                    <img class="profile-modern-image" src="{{url('uploads/leaders/'.$leader->$file)}}" alt="" width="336" height="336">
                </div>

                <div class="profile-modern-main">
                    <div class="profile-modern-header">
                        <div class="profile-modern-header-item">
                            <h3>{{$leader->$title}}</h3>
                            <p>{{$leader->$position}}</p>
                        </div>
                        <div class="profile-modern-item">
                            <div class="group group-xs group-middle">
                                {{--<a class="icon icon-sm icon-creative mdi mdi-facebook" href="#"></a>--}}
                                {{--<a class="icon icon-sm icon-creative mdi mdi-twitter" href="#"></a>--}}
                                {{--<a class="icon icon-sm icon-creative mdi mdi-instagram" href="#"></a>--}}
                                {{--<a class="icon icon-sm icon-creative mdi mdi-google" href="#"></a>--}}
                                {{--<a class="icon icon-sm icon-creative mdi mdi-linkedin" href="#"></a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="row row-30">
                        <div class="col-lg-12">
                            <p>{{$leader->$description}}</p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
@endsection
@push('after-scripts')
@endpush

@push('after-styles')
@endpush