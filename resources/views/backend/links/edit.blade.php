@extends('backend.main')

@section('title', 'Edit Useful Link')

@section('stylesheets')
    <!--Bootstrap Datepicker [ Required ]-->
    <link href="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
@endsection

@section('scripts')
    <!--Bootstrap Timepicker [ OPTIONAL ]-->
    <script src="{{asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>

    <!--Bootstrap Datepicker [  ]-->
    <script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!--Form Component [ SAMPLE ]-->
    <script src="{{asset('assets/js/demo/form-component.js')}}"></script>
@endsection
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

    @include('backend.partials._alert')
    <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">@yield('title')</h3>
                        </div>
                        <!--Horizontal Form-->
                        <!--===================================================-->
                        {!! Form::model($link, ['route' => ['backend.links.update',$link->id], 'class'=>'form-horizontal', 'method'=>'PUT', 'files'=>'true']) !!}
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        {{Form::label('title', 'Title (*)',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('title', $link->title,['class'=>'form-control','placeholder'=>'Enter Title'])}}
                                            @if ($errors->has('title'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                                        {{Form::label('link', 'Link (*)',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('link', $link->link,['class'=>'form-control','placeholder'=>'Enter Link'])}}
                                            @if ($errors->has('link'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('link') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <button class="btn btn-primary btn-block" type="submit"><strong>Update Useful Link</strong></button>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <!--===================================================-->
                        <!--End Horizontal Form-->
                    </div>

                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
@endsection
