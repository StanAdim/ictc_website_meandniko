@extends('backend.main')

@section('title', 'New Section')

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
                        {!! Form::open(['route' => 'backend.sections.store', 'class'=>'form-horizontal','autocomplete'=>'off', 'files' => true]) !!}
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group {{ $errors->has('title_sw') ? ' has-error' : '' }}">
                                        {{Form::label('slug', 'Slug',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('slug', null,['class'=>'form-control','placeholder'=>'Enter Slug'])}}
                                            @if ($errors->has('slug'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('slug') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('title_sw') ? ' has-error' : '' }}">
                                        {{Form::label('title_sw', 'Title SW',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('title_sw', null,['class'=>'form-control','placeholder'=>'Enter Swahili Title'])}}
                                            @if ($errors->has('title_sw'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('title_sw') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('title_en') ? ' has-error' : '' }}">
                                        {{Form::label('title_en', 'Title EN',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('title_en', null,['class'=>'form-control','placeholder'=>'Enter English Title'])}}
                                            @if ($errors->has('title_en'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('title_en') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('description_sw') ? ' has-error' : '' }}">
                                        {{Form::label('description_sw', 'Description SW',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::textarea('description_sw', null,['class'=>'form-control tinymce','placeholder'=>'Enter Description'])}}
                                            @if ($errors->has('description_sw'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('description_sw') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('description_en') ? ' has-error' : '' }}">
                                        {{Form::label('description_en', 'Description EN',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::textarea('description_en', null,['class'=>'form-control tinymce','placeholder'=>'Enter Description'])}}
                                            @if ($errors->has('description_en'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('description_en') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('photo_sw') ? ' has-error' : '' }}">
                                        {{Form::label('photo_sw', 'File SW (400x400)',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{ Form::file('photo_sw', ['class'=>'form-control']) }}
                                            @if ($errors->has('photo_sw'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('photo_sw') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('photo_en') ? ' has-error' : '' }}">
                                        {{Form::label('photo_en', 'File EN (400x400)',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{ Form::file('photo_en', ['class'=>'form-control']) }}
                                            @if ($errors->has('photo_en'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('photo_en') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="panel-footer text-right">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-2">
                                    <button class="btn btn-primary btn-block" type="submit">Add New Section</button>
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
