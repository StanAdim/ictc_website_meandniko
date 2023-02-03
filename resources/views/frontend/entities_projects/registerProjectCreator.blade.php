@extends('frontend.layout.main', ['title' => 'Project Creator Form', 'header' => 'National Projects'])
@section('content')
        <div class="container">
            <div class="row">
                <div class="col m-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5 class="card-title">Personal Information</h5>
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


                            {!! Form::open(['route' => 'projectCreator.store', 'class'=>'rd-form rd-mailform',
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
                                        <label class="form-label-outside text-dark" for="dob">Date of Birth</label>
                                        {{Form::date('dob','Date',['class'=>'form-input','id'=>'dob',"data-constraints"=>"@dob"])}}
                                        
                                    </div>
                                </div>
                                    
                                <div class="col-md-6 wow-outer">
                                    <label class="form-label-outside text-dark" for="gender">Gender</label>
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-1">
                                                {!! Form::radio('gender','Male' ,['class'=>'form-check-input m-1','id'=>'flexRadioDefault1',"data-constraints"=>"@gender"]) !!} 
                                            </div>
                                            <div class="col-11">
                                                <label class="form-check-label text-dark" for="flexRadioDefault1">Male</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-1">
                                                {!! Form::radio('gender','Female',['class'=>'form-check-input','id'=>'flexRadioDefault2',"data-constraints"=>"@gender"]) !!} 
                                            </div>
                                            <div class="col-11">
                                                <label class="form-check-label text-dark" for="flexRadioDefault2">Female</label>
                                            </div>
                                        </div>
                                    </div>
        
                                    
                                </div> 

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="region">Region</label>
                                        {!! Form::select('region', $regions,null,['regions'=> 'regions' ,'class'=>'form-input',"data-constraints"=>"@region"]) !!}
                                        
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
        
                                    
                                </div> 

                            </div>

                            <div class="group group-middle">
                                <div class="wow-outer">
                                    <button class="button button-primary button-winona wow fadeSlideInDown" type="submit">Save</button>
                                </div>
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