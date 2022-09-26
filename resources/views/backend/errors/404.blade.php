@extends('backend.main', ['title' => '404', 'header' => '404'])
@section('content')
    <div id="content-container">
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">@yield('title')</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->

    @include('backend.partials._breadcrumb')

    <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="row">
                <div class="col-lg-12 cell-inner">
                    <div class="section-lg">
                        <h3 class="wow-outer text-center">
                            <span class="wow slideInDown" style="color: rgb(116, 117, 127); visibility: visible; animation-name: slideInDown;">Page Not Found</span>
                        </h3>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-12 text-center">
                                <a class="btn btn-primary" href="{{route('backend.dashboard')}}">Go Back Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection