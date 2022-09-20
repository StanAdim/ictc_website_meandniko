@extends('frontend.layout.main', ['title' => '404', 'header' => '404'])
@section('content')
    <section class="section section-sm">
        <div class="container">
            <div class="layout-bordered">
                <div class="layout-bordered-item wow-outer">
                    <div class="layout-bordered-item-inner wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                        <div class="icon icon-lg mdi mdi-phone text-primary"></div>
                        <ul class="list-0">
                            <li><a class="link-default" href="tel:+255 7368 48444">
                                    +255 7368 48444
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="layout-bordered-item wow-outer">
                    <div class="layout-bordered-item-inner wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                        <div class="icon icon-lg mdi mdi-email text-primary"></div>
                        <ul class="list-0">
                            <li><a class="link-default" href="mailto:info@ictc.go.tz">info@ictc.go.tz</a></li>
                            <li><a class="link-default" href="mailto:dg@ictc.go.tz">dg@ictc.go.tz</a></li>
                        </ul>
                    </div>
                </div>
                <div class="layout-bordered-item wow-outer">
                    <div class="layout-bordered-item-inner wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                        <div class="icon icon-lg mdi mdi-map-marker text-primary"></div><a class="link-default" href="#">14 Jamhuri St, Dar es Salaam</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-gray-100">
        <div class="range justify-content-xl-between">
            <div class="align-self-center container">
                <div class="row">
                    <div class="col-lg-12 cell-inner">
                        <div class="section-lg">
                            <h3 class="wow-outer text-center">
                                <span class="wow slideInDown" style="color: rgb(116, 117, 127); visibility: visible; animation-name: slideInDown;">Page Not Found</span>
                            </h3>
                            <div class="row" style="margin-top: 20px">
                                <div class="col-md-12 text-center">
                                    <a class="btn btn-primary" href="{{route('frontend.home')}}">Go Back Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection