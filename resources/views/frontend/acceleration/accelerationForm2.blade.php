@extends('frontend.layout.main', ['title' => 'Founders More Details', 'header' => 'Founders More Details'])
@section('content')
        <div class="container">
            <div class="row">
                <div class="col m-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 class="card-title text-primary">FOUNDERS DETAILS </h4>

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


                            {!! Form::open(['route' => 'foundersDetails.store','class'=>'rd-form rd-mailform',
                            'data-form-output'=>'form-output-global',
                             'data-form-type'=>'contact', 'autocomplete'=>'off', 
                             'validate' => true]) !!}

                        <div class="row row-10">
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="founders">Number of Founders </label>
                                        {!! Form::select('founderNumber',
                                         array(1 => '1',
                                                2 => '2', 
                                                3 => '3', 
                                                4 => '4', 
                                                5 => '5'), 1,
                                        ['id'=> 'founders','class'=>'form-input',
                                        "data-constraints"=>"@founderNumber", "onchange" => "showFounders()"]) !!}
                                       
                                    </div>
                                </div>

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="ageRangeNumber">Founder with Age Between 18-35 Years Old</label>
                                        {!! Form::select('ageRangeNumber',
                                           array(1 => '1',
                                                2 => '2', 
                                                3 => '3', 
                                                4 => '4', 
                                                5 => '5'), 1,
                                        ['id'=> 'ageRangeNumber','class'=>'form-input',"data-constraints"=>"@ageRangeNumber"]) !!}
                                       
                                    </div>
                                </div>

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="femaleFounderNumber"> Female Founders </label>
                                        {!! Form::select('femaleFounderNumber', 
                                          array(0 => 'None',
                                                1 => '1', 
                                                2 => '2', 
                                                3 => '3', 
                                                4 => '4', 
                                                5 => '5'), 0,
                                        ['id'=> 'femaleFounderNumber','class'=>'form-input',"data-constraints"=>"@femaleFounderNumber"]) !!}
                                       
                                    </div>
                                </div>

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="nidaFile">Upload Founders NIDA ID's</label>
                                        <div id="inputFileWrapper">

                                            {!! Form::file('IDFile',null,
                                            ['id'=> 'nidaFile',
                                            "accept"=>".pdf,",
                                            'class'=>'custom-file-input']) !!}
                                           
                                        </div>
                                    </div>
                                </div>

                                 
                                <div class="col-md-12 wow-outer" id="founderInputs">

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

@endsection
@push('after-scripts')
<script>
    function showFounders() {
  const numFounders = document.getElementById("founders").value;
  const founderInputsDiv = document.getElementById("founderInputs");

  // Remove any previously added input fields
  founderInputsDiv.innerHTML = "";

  // Add input fields for each founder
  for (let i = 1; i <= numFounders; i++) {
    const founderLabel = document.createElement("label");
    founderLabel.innerText = `Founder ${i}:`;
    founderLabel.className = "form-label-outside text-dark";

    const founderNameInput = document.createElement("input");
    founderNameInput.type = "text";
    founderNameInput.placeholder = "Founder Full Name";
    founderNameInput.className = "form-input mb-3";
    founderNameInput.name = "founderName_" + i;

    const founderLinkedInInput = document.createElement("input");
    founderLinkedInInput.type = "text";
    founderLinkedInInput.placeholder = "LinkedIn profile link";
    founderLinkedInInput.className = "form-input mb-3";
    founderLinkedInInput.name = "linkedin_" + i;

    founderInputsDiv.appendChild(founderLabel);
    founderInputsDiv.appendChild(founderNameInput);
    founderInputsDiv.appendChild(founderLinkedInInput);
  }
}

</script>
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