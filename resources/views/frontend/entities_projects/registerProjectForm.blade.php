@extends('frontend.layout.main', ['title' => 'Project Details', 'header' => 'National Projects'])
@section('content')
        <div class="container">
            <div class="row">
                <div class="col m-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5 class="card-title">Project Details</h5>
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


                            {!! Form::open(['route' => 'project.store', 'class'=>'rd-form rd-mailform',
                            'data-form-output'=>'form-output-global', 'data-form-type'=>'contact', 'autocomplete'=>'off', 'validate' => true]) !!}
                            <div class="row row-10">
                                
                                
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="title">Project Title</label>
                                        {{ Form::text('title', null,['class'=>'form-input','id'=>'title',"data-constraints"=>"@Required"])}}
                                    </div>
                                </div>


                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="year">Year</label>
                                        {{Form::selectRange('year', 1950, date('Y'),null, ['id' => 'year','class'=>'form-input',"data-constraints"=>"@year"])}}
                                        
                                    </div>
                                </div>      
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="projectCategory">Project Category</label>

                                        {!! Form::select('category', [
                                            'indidual' => 'Individual',
                                            'college' => 'College',
                                            'Technical' => 'Technical',
                                            'vocational' => 'Vocational',
                                            'scholar' => 'Scholar'
                                        ], null, ['id' => 'projectCategory','class'=>'form-input' ,"data-constraints"=>"@projectCategory"] ) !!}
                                        
                                    </div>
                                </div>      
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="projectType">Project Type</label>

                                        {!! Form::select('type',
                                         [
                                            'AgriTec' => 'AgriTec',
                                            'Education' => 'Education',
                                            'Healthy' => 'Healthy',
                                            'Economy' => 'Economy',
                                            'Cyber Security' => 'Cyber Security',
                                            'scholar' => 'Scholar'
                                        ],
                                         null, ['id' => 'projectType','class'=>'form-input' ,"data-constraints"=>"@projectType"] ) !!}
                                        
                                    </div>
                                </div>   
                                

                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="last-name">Institution</label>
                                        {{ Form::text('institution', null,['class'=>'form-input','id'=>'institution',"data-constraints"=>"@Required"])}}
                                    </div>
                                </div>
                                <div class="col-md-6 wow-outer">
                                    <label class="form-label-outside text-dark" for="gender">Nominationation Status</label>
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-1">
                                                {!! Form::radio('isNominated','1' ,['class'=>'form-check-input m-1','id'=>'flexRadioDefault1',"data-constraints"=>"@Required"]) !!} 
                                            </div>
                                            <div class="col-11">
                                                <label class="form-check-label text-dark" for="flexRadioDefault1">Nominated</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-1">
                                                {!! Form::radio('isNominated','0',['class'=>'form-check-input','id'=>'flexRadioDefault2',"data-constraints"=>"@Required"]) !!} 
                                            </div>
                                            <div class="col-11">
                                                <label class="form-check-label text-dark" for="flexRadioDefault2">Not Nominated</label>
                                            </div>
                                        </div>
                                    </div>
        
                                    
                                </div> 
                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside text-dark" for="brief">Brief Your Project</label>
                                        {{ Form::textarea('brief', null,['class'=>'form-input','id'=>'brief',"data-constraints"=>"@Required"])}}
                                    </div>
                                </div>

                                <div class="form-wrap wow fadeSlideInUp invisible">
                                    {{ Form::email('creatorEmail',$creatorEmail,['class'=>'form-input invisible','id'=>'creatorEmail'])}}
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