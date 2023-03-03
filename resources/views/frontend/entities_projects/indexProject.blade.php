@extends('frontend.layout.main', ['title' => 'National Projects', 'header' => 'National Projects'])
@section('content')
        <div class="container">
            <div class="row">
                   
                <div class="col-md-12 card mt-1"> 
                    <div class="card-header text-center">
                        <h4 class="h4">
                            <b class="text-primary">National ICT Projects</b>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">                             
                            <div class="col-12 ">
                          
                          {{-- ------------------------======================================== --}}
            
                              <div class="card mt-2">
                                  <img src="{{asset('images/slideImg3.jpg')}}" class="card-img-top" alt="Project Registration">
            
                                  <div class="card-body text-dark">
                                      <p>
                                          The government of Tanzania is committed to provide support
                                          and  ensuring all ICT  projects are recognised  
                                          and considered for scaleup and promotion toward value addition and entry to the market.
                                      </p>
                                      <p>
                                          As ICT Professional, Student or Individual who aspired to build or develop innovation
                                          projects related to Information Communication and Technology ,Click the link below to register your Project.
                                         
                                      </p>
                                      
                                      <span class="font-monospace fs-6 text-danger p-1 ">Provide appropriate Information !!</span>
                                      
                                  </div>
                            
                                  <div class="">
                                    <a href="{{Route('ProjectRegisterForm')}}" class="btn btn-primary  m-3 p-2">Register Now</a>
                                    <a href="{{Route('innovationProjects')}}" class="btn btn-success m-3 p-2">PROJECT LIST</a>        
    
                                  </div>
                                </div>
                          </div>
            
                          
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