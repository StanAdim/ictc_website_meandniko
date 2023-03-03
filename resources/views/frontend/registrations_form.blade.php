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

                        <h5 class="text-capitalize">STARTUP|COMPANY INFORMATION</h5>
                        <div class="row row-10">

                           
                

                            <div class="col-md-6 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp {{ $errors->has('entity_name') ? ' has-error' : '' }}">
                                    <label class="form-label-outside text-dark" for="entity_name">Startup Name (*)</label>
                                    {{Form::text('entity_name', null,['id'=> 'entity_name','class'=>'form-input','required'=>'required','placeholder'=>'Startup Name'])}}

                                    <div class="col-12 text-dark">
                                        @if ($errors->has('entity_name'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('entity_name') }}</b>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            </div>
                     


                            <div class="col-md-6 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp {{ $errors->has('entity_address') ? ' has-error' : '' }}">
                                    <label class="form-label-outside text-dark" for="entity_address">Startup  Address (*)</label>
                                    {{Form::text('entity_address', null,['id'=> 'entity_address','class'=>'form-input','required'=>'required','placeholder'=>'Startup Address'])}}
                                    <div class="col-12 text-dark">
                                        @if ($errors->has('entity_address'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('entity_address') }}</b>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-6 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp {{ $errors->has('region') ? ' has-error' : '' }}">
                                    <label class="form-label-outside text-dark" for="region">Region (*)</label>
                                    {{Form::select('region',$regions, null,['id'=> 'region','class'=>'form-input','required'=>'required'])}}
                                    <div class="col-12 text-dark">
                                        @if ($errors->has('region'))
                                            <span class="help-block">
                                                <b>{{ $errors->first('region') }}</b>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp">
                                    <label class="form-label-outside text-dark" for="district">District (*)</label>
                                    {!! Form::select('district', [],null,['id'=> 'district' ,'class'=>'form-input',"data-constraints"=>"@district"]) !!}
                                    
                                </div>
                            </div>

                            <div class="col-md-6 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp">
                                    <label class="form-label-outside text-dark" for="category">Categories(s) (*)</label>
                                    {!! Form::select('category[]', $categories,null,['id'=> 'category' ,'class'=>'form-input select2','required'=>'required',"data-constraints"=>"@category"]) !!}
                                    <div class="col-12 text-dark">
                                        @if ($errors->has('category'))
                                            <span class="help-block">
                                                <b>{{ $errors->first('category') }}</b>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp {{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label class="form-label-outside text-dark" for="entity_address">Phone Number (*)</label>
                                    {{Form::text('phone', null,['id'=> 'phone','class'=>'form-input','required'=>'required','placeholder'=>'+255'])}}
                                    <div class="col-12 text-dark">
                                        @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('phone') }}</b>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="form-label-outside text-dark" for="email">Email (*)</label>
                                    {{Form::text('email', null,['id'=> 'email','class'=>'form-input','required'=>'required','placeholder'=>'Enter Email'])}}
                                    <div class="col-12 text-dark">
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('email') }}</b>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp {{ $errors->has('website') ? ' has-error' : '' }}">
                                    <label class="form-label-outside text-dark" for="website">Website URL </label>
                                    {{Form::text('website', null,['id'=> 'website','class'=>'form-input','placeholder'=>'Write Website url'])}}
                                    <div class="col-12 text-dark">
                                        @if ($errors->has('website'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('website') }}</b>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp {{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label class="form-label-outside text-dark" for="description">Startup Brief</label>
                                    {{Form::textarea('description', null,['id'=> 'description','class'=>'form-input','rows'=>'4','placeholder'=>'Brief about your Company or Startup "Not more than 300 words"','required'=>'required'])}}
                                    <div class="col-12 text-dark">
                                        @if ($errors->has('description'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('description') }}</b>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            </div>
                            
        
                            <div class="col-12 text-dark">
                                <h5 class="text-capitalize">CONTACT PERSON DETAILS</h5>
                            </div>
        
                              <div class="col-md-4 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp {{ $errors->has('contact_name') ? ' has-error' : '' }}">
                                    <label class="form-label-outside text-dark" for="contact_name">Full Name (*) </label>
                                    {{Form::text('contact_name', null,['id'=> 'contact_name','class'=>'form-input','placeholder'=>'Names'])}}
                                    <div class="col-12 text-dark">
                                        @if ($errors->has('contact_name'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('contact_name') }}</b>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            </div>
        
                           
                            <div class="col-md-4 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp {{ $errors->has('contact_email') ? ' has-error' : '' }}">
                                    <label class="form-label-outside text-dark" for="contact_email">Email (*) </label>
                                    {{Form::text('contact_email', null,['id'=> 'contact_email','class'=>'form-input','placeholder'=>'Email'])}}
                                    <div class="col-12 text-dark">
                                        @if ($errors->has('contact_email'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('contact_email') }}</b>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            </div>
        

                            <div class="col-md-4 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp {{ $errors->has('contact_phone') ? ' has-error' : '' }}">
                                    <label class="form-label-outside text-dark" for="contact_phone">Phone (*) </label>
                                    {{Form::text('contact_phone', null,['id'=> 'contact_phone','class'=>'form-input','placeholder'=>'+255'])}}
                                    <div class="col-12 text-dark">
                                        @if ($errors->has('contact_phone'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('contact_phone') }}</b>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            </div>

        
                            <div class="col-md-12 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp">
                                    <label class="form-label-outside text-dark" for="registration_condition">BRELA Registration Status(*)</label>
                                    {!! Form::select('is_registered', $registration_conditions,null,['id'=> 'registration_condition' ,'class'=>'form-input','required'=>'required',"data-constraints"=>"@registered"]) !!}
                                    <div class="col-12 text-dark">
                                        @if ($errors->has('is_registered'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('is_registered') }}</b>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            </div>

        
                            <div id="registered_fields"></div>
                            <div class="col-12 text-dark">
                                
                            </div>

                            <div class="col-md-12 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp {{ $errors->has('list_of_social_media') ? ' has-error' : '' }}">
                                    <label class="form-label-outside text-dark" for="list_of_social_media">List of Social Media Links (*)</label>
                                    {{Form::textarea('list_of_social_media', null,['id'=> 'list_of_social_media','class'=>'form-input','rows'=>'3','placeholder'=>'Brief about your Entity','required'=>'required'])}}
                                    <div class="col-12 text-dark">
                                        @if ($errors->has('list_of_social_media'))
                                        <span class="help-block">
                                            <b>{{ $errors->first('list_of_social_media') }}</b>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            </div>
                            <div class="alert">
                                <p class="text-danger">
                                Please Make Sure All the Information provided is accurate, You wont be able to Edit After Registering

                                </p>
                            </div>
                            <!-- Button trigger modal -->
                            <button type="submit" class="btn btn-primary btn-block"  >Register</button>
                            
                              

                            {{--{!! RecaptchaV3::field('registration_form') !!}--}}
                            {{--@if ($errors->has('g-recaptcha-response'))--}}
                                {{--<span class="help-block">--}}
                                    {{--<b>Robot detected</b>--}}
                                {{--</span>--}}
                            {{--@endif--}}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    
                  </div>
                </div>
            </div>
        </div>
    </section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
      $("#region").change(function() {
        var regionId = $(this).val();
  
        // Fetch the list of countries for the selected region from the server
        $.get("Entities/get/districts/" + regionId, function(data) {
          var districtSelect = $("#district");

          // Clear the current list of countries
          districtSelect.empty();
  
          // Add the new list of countries
          $.each(data, function(key, value) {
            districtSelect.append("<option value='" + value.district + "'>" + value.district + "</option>");
          });
        });
      });
    });
  </script>
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