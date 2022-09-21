@extends('backend.main')

@section('title', 'Edit Award')

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
                        {!! Form::model($award, ['route' => ['backend.awards.update',$award->id], 'class'=>'form-horizontal', 'method'=>'PUT', 'files'=>'true']) !!}
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('title_sw') ? ' has-error' : '' }}">
                                        {{Form::label('title_sw', 'Title SW (*)',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{ Form::text('title_sw', $award->title_sw,['class'=>'form-control','placeholder'=>'Enter Name'])}}
                                            @if ($errors->has('title_sw'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('title_sw') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('title_en') ? ' has-error' : '' }}">
                                        {{Form::label('title_en', 'Title EN (*)',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('title_en', $award->title_en,['class'=>'form-control','placeholder'=>'Enter Name'])}}
                                            @if ($errors->has('title_en'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('title_en') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('application_deadline') ? ' has-error' : '' }}">
                                        {{Form::label('application_deadline', 'Application Deadline (*)',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('application_deadline', $award->application_deadline,['class'=>'form-control datetimepicker','placeholder'=>'Enter Application Deadline'])}}
                                            @if ($errors->has('application_deadline'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('application_deadline') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('award_date') ? ' has-error' : '' }}">
                                        {{Form::label('award_date', 'End Date (*)',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('award_date', $award->award_date,['class'=>'form-control datetimepicker2','placeholder'=>'Enter Award Date'])}}
                                            @if ($errors->has('award_date'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('award_date') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('details_sw') ? ' has-error' : '' }}">
                                        {{Form::label('description_sw', 'Description SW (*)',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::textarea('description_sw', $award->details_sw,['class'=>'form-control tinymce','placeholder'=>'Enter Description'])}}
                                            @if ($errors->has('description_sw'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('description_sw') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('description_en') ? ' has-error' : '' }}">
                                        {{Form::label('description_en', 'Description EN (*)',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::textarea('description_en', $award->details_sw,['class'=>'form-control tinymce','placeholder'=>'Enter Description'])}}
                                            @if ($errors->has('description_en'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('description_en') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    @if($award->file_sw)
                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <img src="{{url('uploads/awards/'.$award->file_sw)}}" class="img-fluid img-thumbnail" alt="Responsive image">
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group{{ $errors->has('photo_sw') ? ' has-error' : '' }}">
                                        {{Form::label('photo_sw', 'File SW (570x352)',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{ Form::file('photo_sw', ['class'=>'form-control']) }}
                                            @if ($errors->has('photo_sw'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('photo_sw') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    @if($award->file_en)
                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <img src="{{url('uploads/awards/'.$award->file_en)}}" class="img-fluid img-thumbnail" alt="Responsive image">
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group{{ $errors->has('photo_en') ? ' has-error' : '' }}">
                                        {{Form::label('photo_en', 'File EN (570x352)',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{ Form::file('photo_en', ['class'=>'form-control']) }}
                                            @if ($errors->has('photo_en'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('photo_en') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <hr/>
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Award Contact Person (Optional)</h3>
                                    </div>

                                    <div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">
                                        {{Form::label('contact_name', 'Contact Name',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('contact_name', $award->contact_name,['class'=>'form-control','placeholder'=>'Enter Contact Name'])}}
                                            @if ($errors->has('contact_name'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('contact_name') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">
                                        {{Form::label('contact_email', 'Contact Email',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('contact_email', $award->contact_email,['class'=>'form-control','placeholder'=>'Enter Contact Email'])}}
                                            @if ($errors->has('contact_email'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('contact_email') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('contact_phone') ? ' has-error' : '' }}">
                                        {{Form::label('contact_phone', 'Contact Phone',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('contact_phone', $award->contact_phone,['class'=>'form-control','placeholder'=>'Enter Contact Phone'])}}
                                            @if ($errors->has('contact_phone'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('contact_phone') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <hr/>
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Award Extra Details (Optional)</h3>
                                    </div>

                                    <div class="form-group{{ $errors->has('award_venue') ? ' has-error' : '' }}">
                                        {{Form::label('award_venue', 'Award Venue',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::text('award_venue', $award->award_venue,['class'=>'form-control','placeholder'=>'Enter Award Venue'])}}
                                            @if ($errors->has('award_venue'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('award_venue') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has('short_description_sw') ? ' has-error' : '' }}">
                                        {{Form::label('short_description_sw', 'Short Description SW',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::textarea('short_description_sw', $award->short_description_sw,['class'=>'form-control','placeholder'=>'Enter Short Description in swahili'])}}
                                            @if ($errors->has('short_description_sw'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('short_description_sw') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('short_description_en') ? ' has-error' : '' }}">
                                        {{Form::label('short_description_en', 'Short Description EN',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{Form::textarea('short_description_en', $award->short_description_en,['class'=>'form-control','placeholder'=>'Enter Short Description in English'])}}
                                            @if ($errors->has('short_description_en'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('short_description_en') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    @if($award->attachment_sw)
                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <a href="{{url('uploads/award-attachments/'.$award->attachment_sw)}}" class="btn btn-primary">View Previous Attachments</a>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group{{ $errors->has('attachment_sw') ? ' has-error' : '' }}">
                                        {{Form::label('attachment_sw', 'Attachment SW',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{ Form::file('attachment_sw', ['class'=>'form-control']) }}
                                            @if ($errors->has('attachment_sw'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('attachment_sw') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    @if($award->attachment_en)
                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <a href="{{url('uploads/award-attachments/'.$award->attachment_en)}}" class="btn btn-primary">View Previous Attachments</a>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group{{ $errors->has('attachment_en') ? ' has-error' : '' }}">
                                        {{Form::label('attachment_en', 'Attachment EN',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            {{ Form::file('attachment_en', ['class'=>'form-control']) }}
                                            @if ($errors->has('attachment_en'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('attachment_en') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{Form::label('Publish', 'Publish?',['class'=>'col-sm-3 control-label'])}}
                                        <div class="col-sm-9">
                                            <div class="checkbox">
                                                <input type="checkbox" class="form-control"  {{ $award->published ? 'checked' : ''}} name="published">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <button class="btn btn-primary btn-block" type="submit"><strong>Update Award</strong></button>
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
