@extends('frontend.layout.main', ['title' => 'Project Creator Form', 'header' => 'National Projects'])
@section('content')
        <div class="container">
            <div class="row">
                <div class="col m-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5 class="card-title">Supervisor | Referee Information</h5>
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


                            {!! Form::open(['route' => 'projectSupervisor.store', 'class'=>'rd-form rd-mailform',
                            'data-form-output'=>'form-output-global', 'data-form-type'=>'contact', 'autocomplete'=>'off', 'validate' => true]) !!}
                            <div class="row row-10">
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="first-name">First Name</label>
                                        {{ Form::text('firstName', null,['class'=>'form-input','id'=>'first-name',"data-constraints"=>"@Required"])}}
                                    </div>
                                </div>
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="last-name">Last Name</label>
                                        {{ Form::text('secondName', null,['class'=>'form-input','id'=>'last-name',"data-constraints"=>"@Required"])}}
                                    </div>
                                </div>
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="email">E-mail</label>
                                        {{ Form::text('email', null,['class'=>'form-input','id'=>'email',"data-constraints"=>"@Email Required"])}}
                                    </div>
                                </div>

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="phone">Phone</label>
                                        {{ Form::text('phoneNumber', null,['class'=>'form-input','id'=>'phone',"data-constraints"=>"@PhoneNumber"])}}
                                    </div>
                                </div> 

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="fieldExperties">Field of Experties</label>
                                        {{ Form::text('fieldExperties', null,['class'=>'form-input','id'=>'fieldExperties',"data-constraints"=>"@Required"])}}
                                    </div>
                                </div> 
                                    
                                <div class="col-md-6 wow-outer">
                                    <label class="form-label-outside text-dark" for="nationality">Nationality</label>
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-1">
                                                {!! Form::radio('nationality','Tanzanian' ,['class'=>'form-check-input m-1','id'=>'flexRadioDefault1',"data-constraints"=>"@nationality"]) !!} 
                                            </div>
                                            <div class="col-11">
                                                <label class="form-check-label text-dark" for="flexRadioDefault1">Tanzanian</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-1">
                                                {!! Form::radio('nationality','Foreigner',['class'=>'form-check-input','id'=>'flexRadioDefault2',"data-constraints"=>"@gender"]) !!} 
                                            </div>
                                            <div class="col-11">
                                                <label class="form-check-label text-dark" for="flexRadioDefault2">Foreigner</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-wrap wow fadeSlideInUp invisible">
                                        {{ Form::email('creatorEmail',$creatorEmail,['class'=>'form-input invisible','id'=>'creatorEmail'])}}
                                    </div>
        
                                    
                                </div> 

                            </div>

                            <div class="col-12 wow-outer">
                                    
                                <div class="alert">
                                    <p class="text-danger">
                                    Please Make Sure All the Information provided is accurate, You wont be able to Edit After Saving
    
                                    </p>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block"  >Save</button>
                            </div>
                      
                            {!! Form::close() !!}
                          
                            {{-- ========================================================================================== --}}

                           
                          
                        </div>
                      </div>
                </div>
            </div>
        </div>
@endsection
@push('after-scripts')
@endpush

@push('after-styles')
@endpush