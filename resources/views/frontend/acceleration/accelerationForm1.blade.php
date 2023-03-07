@extends('frontend.layout.main', ['title' => 'Applicant Details', 'header' => 'Applicant Details'])
@section('content')
        <div class="container">
            <div class="row">
                <div class="col m-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 class="card-title text-primary">APPLICANT DETAILS </h4>
                        </div>
                        <div class="card-body">
                          
                            {{-- ========================================================================================== --}}      
                                    {{-- FORM --}}                            
                            {{-- ========================================================================================== --}}
                            
                            
                            <!-- /resources/views/post/create.blade.php -->                   
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
<!-- Create Post Form -->


                            {!! Form::open(['route' => 'applicantDetails.store', 'class'=>'rd-form rd-mailform',
                            'data-form-output'=>'form-output-global', 'data-form-type'=>'contact', 
                            'autocomplete'=>'off', 'validate' => true]) !!}
                            <div class="row row-10">
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="firstName">First Name</label>
                                        {{ Form::text('firstName', null,['class'=>'form-input','id'=>'firstName',"data-constraints"=>"@Required"])}}
                                    </div>
                                </div>
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="lastName">Last Name</label>
                                        {{ Form::text('lastName', null,['class'=>'form-input','id'=>'lastName',"data-constraints"=>"@Required"])}}
                                    </div>
                                </div>
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="email">E-mail</label>
                                        {{ Form::text('email', null,['class'=>'form-input','id'=>'email',"data-constraints"=>"@Email @Required"])}}
                                    </div>
                                </div>

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="phone">Phone</label>
                                        {{ Form::text('phoneNumber', null,['class'=>'form-input','id'=>'phone',"data-constraints"=>"@Required",'placeholder' => '+255..'])}}
                                    </div>
                                </div> 
                                
                                
                                    
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="residenceCountry">Country Of Residence</label>
                                        {!! Form::select('residenceCountry', $countries,null,['id'=> 'residenceCountry' ,'class'=>'form-input',"data-constraints"=>"@Required"]) !!}                                        
                                    </div>
                                </div>


                                    
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="citizenshipCountry">Country Of Citizenship</label>
                                        {!! Form::select('citizenshipCountry', $countries,null,['id'=> 'citizenshipCountry' ,'class'=>'form-input',"data-constraints"=>"@Required"]) !!}                                        
                                    </div>
                                </div>

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="startupName">Startup Name</label>
                                        {{ Form::text('startupName', null,['class'=>'form-input','id'=>'startupName',"data-constraints"=>"@Required"])}}
                                    </div>
                                </div>

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="startupCategory">Startup Category</label>
                                        {!! Form::select('startupCategory[]', $startupCategories,null,['id'=> 'startupCategory' ,'class'=>'form-input select2',"data-constraints"=>"@Required"]) !!}
                                        
                                    </div>
                                </div>


                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="countryOfOperation">Country|Countries Of Operation</label>
                                {{ Form::text('countryOfOperation', null,['class'=>'form-input','id'=>'countryOfOperation',
                                        "placeholder"=> "Tanzania;Kenya;Uganda",
                                        "data-constraints"=>"@Required"])}}
                                    </div>
                                </div>
                                                                

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="region">Region</label>
                                        {!! Form::select('region[]', $regions,null,['id'=> 'region' ,'class'=>'form-input select2',"data-constraints"=>"@region"]) !!}
                                        
                                    </div>
                                </div>
                                    
                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="startupBrief">Brief Startup Description</label>
                                        {{ Form::textarea('startupBrief', null,
                                        ['class'=>'form-input','id'=>'startupBrief',"data-constraints"=>"@Required",
                                        "placeholder" => "Please!! Give a brief Description of Your Startup (In Less than 280 Characters)" ])}}
                                    </div>
                                </div>

                                 
                               
                            </div>
                            <div class="alert">
                                <p class="programmeDetails">
                                    Please Make Sure All the Information provided is accurate, You wont be able to Edit After Saving.
                                </p>
                            </div>
                            <!-- Button trigger modal -->
                            <button type="submit" class="btn btn-primary btn-block"  >Save</button>

                            {!! Form::close() !!}
                          
                            {{-- ========================================================================================== --}}

                           
                          
                        </div>
                      </div>
                </div>
            </div>
        </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
      $("#region").change(function() {
        var regionId = $(this).val();
  
        // Fetch the list of countries for the selected region from the server
        $.get("/get/districts/" + regionId, function(data) {
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
@endpush

@push('after-styles')
{!! RecaptchaV3::initJs() !!}
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <style type="text/css">
        .select2-container--default .select2-selection--multiple {
            padding-bottom: 38px;
        }
        .programmeDetails{
            font-size: 18px;
            color:rgb(172, 35, 35);
            font-family: 'Times New Roman', Courier, monospace;
        }
    </style>

@endpush