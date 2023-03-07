@extends('frontend.layout.main', ['title' => 'Funding Details', 'header' => 'Funding Details'])
@section('content')
        <div class="container">
            <div class="row">
                <div class="col m-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 class="card-title text-primary">FUNDING AND PLANS</h4>
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


                    {!! Form::open(['route' => 'fundingExtra.store', 'class'=>'rd-form rd-mailform',
                            'data-form-output'=>'form-output-global',
                             'data-form-type'=>'contact', 'autocomplete'=>'off', 'validate' => true]) !!}


                            <div class="row row-10">

                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="marketStrategy">Sales|Marketing Strategy</label>
                                        {{ Form::textarea('marketStrategy', null,
                                        ['class'=>'form-input','id'=>'marketStrategy',"data-constraints"=>"@marketStrategy",
                                        "placeholder" => "Describe your Sales or Marketing Strategy to be able to reach the above customers? - If using a digital strategy describe in detail : maximum 400 characters"])}}
                                    </div>
                                </div>




                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="competitionStatus">Competition Status</label>
                                        {{ Form::textarea('competitionStatus', null,
                                        ['class'=>'form-input','id'=>'competitionStatus',"data-constraints"=>"@competitionStatus",
                                        "placeholder" => "Does your solution have any competitors? If yes, kindly elaborate : maximum 400 characters"])}}
                                    </div>
                                </div>


                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="valueProposition">Value Proposition</label>
                                        {{ Form::textarea('valueProposition', null,
                                        ['class'=>'form-input','id'=>'valueProposition',"data-constraints"=>"@valueProposition",
                                        "placeholder" => "How does your value proposition make you competitive ? : maximum 400 characters"])}}
                                    </div>
                                </div>
                                
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="raisedRevenue">Raised Revenue Update</label>
                                        {{ Form::number('raisedRevenue', null,[ 'placeholder'=>'up to 9,999,999,999','class'=>'form-input','id'=>'raisedRevenue',"data-constraints"=>"@Required"])}}
                                    </div>
                                </div>

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="capitalInNeed">Capital In Need (6 Month)</label>
                                        {{ Form::number('capitalInNeed', null,[ 'placeholder'=>'up to 9,999,999,999','class'=>'form-input','id'=>'capitalInNeed',"data-constraints"=>"@Required"])}}
                                    </div>
                                </div>


                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="capitalUses">Capital Uses</label>
                                        {{ Form::textarea('capitalUses', null,
                                        ['class'=>'form-input','id'=>'capitalUses',"data-constraints"=>"@capitalUses",
                                        "placeholder" => "What will be the uses of this Capital and what will it help your Start-Up achieve ? : maximum 400 characters"])}}
                                    </div>
                                </div>
                               
                                <div class="col-md-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="investmentMode">Investment Mode</label>
                                        {!! Form::select('investmentMode', 
                                          array(0 => 'Equity Investment',
                                                1 => 'Debt Instrument/Loan', 
                                                2 => 'Grant', 
                                                3 => 'All Above', 
                                                4 => 'None'), null,
                                        ['id'=> 'investmentMode','class'=>'form-input',"data-constraints"=>"@investmentMode"]) !!}
                                       
                                    </div>
                                </div>

                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="reasonForAcceleration">Reason For Acceleration</label>
                                        {{ Form::textarea('reasonForAcceleration', null,
                                        ['class'=>'form-input','id'=>'reasonForAcceleration',"data-constraints"=>"@reasonForAcceleration",
                                        "placeholder" => "Why would you like to join this Accelerator ? : maximum 400 characters"])}}
                                    </div>
                                </div>

                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="hopeToAchieve">Hope On Acceleration</label>
                                        {{ Form::textarea('hopeToAchieve', null,
                                        ['class'=>'form-input','id'=>'hopeToAchieve',"data-constraints"=>"@hopeToAchieve",
                                        "placeholder" => "What do you hope to have achieved by the end of the Accelerator ? : maximum 400 characters"])}}
                                    </div>
                                </div>

                            </div>
                            <div class="alert">
                                <p class="programmeDetails">
                                Please Make Sure All the Information provided is accurate, You wont be able to Edit After Saving

                                </p>
                            </div>
                            <!-- Button trigger modal -->
                            <button type="submit" class="btn btn-primary btn-block"  >Submit</button>

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