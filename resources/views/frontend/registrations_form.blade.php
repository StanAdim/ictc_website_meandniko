@extends('frontend.layout.main', ['title' => 'Registration', 'header' => 'Registration'])
@section('content')
    @php
        $title_var = "title_" . App\Helpers\Helper::currentLanguage()->code;
        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');

        $file_var = "file_" . App\Helpers\Helper::currentLanguage()->code;
        $file_var2 = "file_" . env('DEFAULT_LANGUAGE');

        $description_var = "description_" . App\Helpers\Helper::currentLanguage()->code;
        $description_var2 = "description_" . env('DEFAULT_LANGUAGE');
    @endphp

    <section class="section section-lg mt-4 pt-4">
        <div class="container">    

            <div class="row">
                <div class="col m-2">
                  <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title"> Startup Registration</h5>
                    </div>
                    <div class="card-body">

                        {!! Form::open(['route' => 'frontend.registration.register.store', 'class'=>'form-horizontal','autocomplete'=>'off', 'files' => true]) !!}

                        <h5 class="text-capitalize">ENTITY INFORMATION</h5>
                        <div class="row row-10">

                            <div class="form-group py-2 {{ $errors->has('entity_name') ? ' has-error' : '' }}">
                                {{Form::label('entity_name', 'Entity Name (*)',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::text('entity_name', null,['class'=>'form-control','required'=>'required','placeholder'=>'Enter Entity Name'])}}
                                    @if ($errors->has('entity_name'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('entity_name') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group py-2 {{ $errors->has('entity_address') ? ' has-error' : '' }}">
                                {{Form::label('entity_address', 'Entity Address (*)',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::text('entity_address', null,['class'=>'form-control','required'=>'required','placeholder'=>'Enter Entity Address'])}}
                                    @if ($errors->has('entity_address'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('entity_address') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group py-2 {{ $errors->has('region') ? ' has-error' : '' }}">
                                {{Form::label('region', 'Select Region (*)',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::select('region',$regions, null,['class'=>'form-control','required'=>'required'])}}
                                    @if ($errors->has('region'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('region') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group py-2 {{ $errors->has('category') ? ' has-error' : '' }}">
                                {{Form::label('category', 'Select Categories(s) (*)',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::select('category[]',$categories, null,['class'=>'form-control select2','required'=>'required'])}}
                                    @if ($errors->has('category'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('category') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group py-2 {{ $errors->has('phone') ? ' has-error' : '' }}">
                                {{Form::label('phone', 'Phone Number (*)',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::text('phone', null,['class'=>'form-control','placeholder'=>'Enter Phone Number','required'=>'required'])}}
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('phone') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group py-2 {{ $errors->has('email') ? ' has-error' : '' }}">
                                {{Form::label('email', 'Email (*)',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::text('email', null,['class'=>'form-control','placeholder'=>'Enter Email','required'=>'required'])}}
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('email') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group py-2 {{ $errors->has('website') ? ' has-error' : '' }}">
                                {{Form::label('website', 'Website URL',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::text('website', null,['class'=>'form-control','placeholder'=>'Write Website url'])}}
                                    @if ($errors->has('website'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('website') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group  py-2 {{ $errors->has('description') ? ' has-error' : '' }}">
                                {{Form::label('description', 'Brief About Your Entity (*)',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::textarea('description', null,['class'=>'form-control ','rows'=>'4','placeholder'=>'Write some brief about your Entity','required'=>'required'])}}
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('description') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 text-dark">
                                <h5 class="text-capitalize">CONTACT DETAILS</h5>
                            </div>
        
                           
        
                            <div class="form-group py-2 {{ $errors->has('contact_name') ? ' has-error' : '' }}">
                                {{Form::label('contact_name', 'Full Name (*)',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::text('contact_name', null,['class'=>'form-control','required'=>'required','placeholder'=>'Enter Contact Name'])}}
                                    @if ($errors->has('contact_name'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('contact_name') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group py-2 {{ $errors->has('contact_email') ? ' has-error' : '' }}">
                                {{Form::label('contact_email', 'Email (*)',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::text('contact_email', null,['class'=>'form-control','required'=>'required','placeholder'=>'Enter Contact Email'])}}
                                    @if ($errors->has('contact_email'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('contact_email') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group py-2 {{ $errors->has('contact_phone') ? ' has-error' : '' }}">
                                {{Form::label('contact_phone', 'Phone (*)',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::text('contact_phone', null,['class'=>'form-control','required'=>'required','placeholder'=>'Enter Contact Phone'])}}
                                    @if ($errors->has('contact_phone'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('contact_phone') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
        
        
                            <div class="form-group py-2 {{ $errors->has('is_registered') ? ' has-error' : '' }}">
                                {{Form::label('is_registered', 'Registration Condition(*)',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::select('is_registered',$registration_conditions, null,['class'=>'form-control','required'=>'required', 'id' => 'registration_condition'])}}
                                    @if ($errors->has('is_registered'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('is_registered') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div id="registered_fields"></div>
                            <div class="col-12 text-dark">
                                
                            </div>
                            <div class=" py-2 {{ $errors->has('list_of_social_media') ? ' has-error' : '' }}">
                                {{Form::label('list_of_social_media', 'List of Social Media Links (*)',['class'=>'col-12 text-dark control-label pb-2'])}}
                                <div class="col-12 text-dark">
                                    {{Form::textarea('list_of_social_media', null,['class'=>'form-control','rows'=>'2','required'=>'required','placeholder'=>''])}}
                                    @if ($errors->has('list_of_social_media'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('list_of_social_media') }}</b>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            {{--{!! RecaptchaV3::field('registration_form') !!}--}}
                            {{--@if ($errors->has('g-recaptcha-response'))--}}
                                {{--<span class="help-block">--}}
                                    {{--<b>Robot detected</b>--}}
                                {{--</span>--}}
                            {{--@endif--}}
                            <button class="btn btn-primary btn-block" type="submit">Register</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    
                  </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after-scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        $(".select2").select2({
            dropdownAutoWidth: true,
            multiple: true,
            theme: "bootstrap",
            placeholder: "Select Categories",
            allowClear: true
        }).val([]).trigger('change.select2');
    </script>

    <script type="text/javascript">
        $(function() {
            $("#registration_condition").change(function(event) { // catch the form's submit event
                event.preventDefault();
                console.log(event, $(this).val());
                if ($(this).val() === '1') {
                    $.ajax({
                        type: 'GET', // GET or POST
                        dataType: "html",
                        url: '{{ route('frontend.registration.additional_field') }}', // the file to call
                        success: function(response) { // on success..
                            $('#registered_fields').html(response); // update the DIV
                        }
                    });
                } else {
                    $('#registered_fields').empty();
                }
            });
        });
    </script>
@endpush

@push('after-styles')
    {!! RecaptchaV3::initJs() !!}
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <style type="text/css">
        .select2-container--default .select2-selection--multiple {
            padding-bottom: 38px;
        }
    </style>
@endpush