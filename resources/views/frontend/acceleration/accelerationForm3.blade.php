@extends('frontend.layout.main', ['title' => 'Startup More Details', 'header' => 'Startup More Details'])
@section('content')
        <div class="container">
            <div class="row">
                <div class="col m-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 class="card-title text-primary">STARTUP DETAILS </h4>
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

                        @if($status)
                        <div class="alert alert-success text-center m-2">
                           <b> 
                               <i>
                                   {{ $status }}
                               </i>
                        </b>
                        </div>
                      @endif
                        
<!-- Create Post Form -->


                    {!! Form::open(['route' => 'startupDetails.store', 'class'=>'rd-form rd-mailform',
                            'data-form-output'=>'form-output-global',
                             'data-form-type'=>'contact', 'autocomplete'=>'off', 'validate' => true]) !!}


                            <div class="row row-10">

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="dateFounded">Date Of Foundation</label>
                                        {{Form::date('dateFounded','Date',['class'=>'form-input',
                                        'id'=>'dateFounded',"data-constraints"=>"@dateFounded"])}}
                                        
                                    </div>
                                </div>

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="currentStage">Startup Current Stage</label>
                                        {!! Form::select('currentStage[]', [],null,['id'=> 'currentStage' 
                                        ,'class'=>'form-input select2',"data-constraints"=>"@currentStage"]) !!}
                                        
                                    </div>
                                </div>
                                
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="businessModel">Startup Business Model</label>
                                        {!! Form::select('businessModel[]', [],null,['id'=> 'businessModel' 
                                        ,'class'=>'form-input select2',"data-constraints"=>"@businessModel"]) !!}
                                        
                                    </div>
                                </div>


                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="revenueGenerationPlan">Revenue Generation Plan</label>
                                        {!! Form::select('revenueGenerationPlan[]', [],null,['id'=> 'revenueGenerationPlan' 
                                        ,'class'=>'form-input select2',"data-constraints"=>"@revenueGenerationPlan"]) !!}
                                        
                                    </div>
                                </div>

                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="problemDescription">Describe the Problem|Societal Challenge</label>
                                        {{ Form::textarea('problemDescription', null,
                                        ['class'=>'form-input','id'=>'problemDescription',"data-constraints"=>"@Required",
                                        "placeholder" => "Give a brief Description of the problem or societal challenge your business is solving. (Use verifiable statistics to further describe the depth of the problem : maximum 500 characters)"])}}
                                    </div>
                                </div>

                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="solutionDescription">Describe the Solution to Challenge|Problem</label>
                                        {{ Form::textarea('solutionDescription', null,
                                        ['class'=>'form-input','id'=>'solutionDescription',"data-constraints"=>"@Required",
                                        "placeholder" => "How does your Start-Up solve this problem or challenge : maximum 500 characters"])}}
                                    </div>
                                </div>


                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="product_serviceDescription">Product | Service Description</label>
                                        {{ Form::textarea('product_serviceDescription', null,
                                        ['class'=>'form-input','id'=>'product_serviceDescription',"data-constraints"=>"@Required",
                                        "placeholder" => "Describe in detail the product orservice that you are offering, and how it is different from existing solutions? : maximum 500 characters"])}}
                                    </div>
                                </div>

                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="targetMarket">Target Market Description</label>
                                        {{ Form::textarea('targetMarket', null,
                                        ['class'=>'form-input','id'=>'targetMarket',"data-constraints"=>"@Required",
                                        "placeholder" => "Who is your target market for this product or service, and how large is the size of that market in terms of numbers and earning potential? Quantify your answer : maximum 500 characters"])}}
                                    </div>
                                </div>

                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="customerService">Customer to Serve Estimation</label>
                                        {{ Form::textarea('customerService', null,
                                        ['class'=>'form-input','id'=>'customerService',"data-constraints"=>"@customerService",
                                        "placeholder" => "Kindly provide an estimate for the next three (3) years of how many customers you plan to serve and likely income or revenue for Year 1, Year 2, and Year 3: maximum 500 characters"])}}
                                    </div>
                                </div>

                                

                            </div>
                            <div class="alert">
                                <p class="programmeDetails">
                                Please Make Sure All the Information provided is accurate, You wont be able to Edit After Saving.

                                </p>
                            </div>
                            <!-- Button trigger modal -->
                            <button type="submit" class="btn btn-primary btn-block">Save</button>

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
@endpush

@push('after-styles')
<style>
    .programmeDetails{
            font-size: 18px;
            color:rgb(172, 35, 35);
            font-family: 'Times New Roman', Courier, monospace;
        }
</style>
@endpush