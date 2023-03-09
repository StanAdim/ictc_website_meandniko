@extends('backend.main')

@section('title', 'Edit General Configurations')

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
                        {!! Form::open(['route' => ['backend.general.store'], 'class'=>'form-horizontal', 'method'=>'POST', 'files'=>'true']) !!}
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('map_key') ? ' has-error' : '' }}">
                                        {{Form::label('map_key', 'Google Map Key',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('map_key', ($general && $general->map_key) ? $general->map_key : null,['class'=>'form-control','placeholder'=>'Enter Google Map Key'])}}
                                            @if ($errors->has('map_key'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('map_key') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('recaptcha_key') ? ' has-error' : '' }}">
                                        {{Form::label('recaptcha_key', 'Google Recaptcha Key',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('recaptcha_key', ($general && $general->recaptcha_key) ? $general->recaptcha_key : null,['class'=>'form-control','placeholder'=>'Enter Google Recaptcha Key'])}}
                                            @if ($errors->has('recaptcha_key'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('recaptcha_key') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('google_recaptcha_secret') ? ' has-error' : '' }}">
                                        {{Form::label('google_recaptcha_secret', 'Google Recaptcha Secret',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('google_recaptcha_secret', ($general && $general->google_recaptcha_secret) ? $general->google_recaptcha_secret : null,['class'=>'form-control','placeholder'=>'Enter Google Recaptcha Secret'])}}
                                            @if ($errors->has('google_recaptcha_secret'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('google_recaptcha_secret') }}</strong>
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
                                    <button class="btn btn-primary btn-block" type="submit"><strong>Update General Configuration</strong></button>
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
@push('after-scripts')
    @include('backend.layouts.editor')
@endpush
