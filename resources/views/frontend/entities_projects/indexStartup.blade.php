@extends('frontend.layout.main', ['title' => 'National Startups', 'header' => 'National Startups'])
@section('content')
        <div class="container">
            <div class="row">
                   
                <div class="col-md-12 card mt-1"> 
                    <div class="card-header text-center">
                        <h4 class="h4">
                            <b class="text-primary">National ICT Startups</b>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">                             
                        
             {{-- ------------------------======================================== --}}
                          <div class="col-12 ">
                     
            
                          <div class="card mt-2">
                                  <img src="{{asset('images/slideImg1.jpg')}}" class="card-img-top" alt="Startup Registration">
                              <div class="card-body text-dark">
                                  <p>
                                      The ICT commission  is committed to the promotion of digital innovation and 
                                      ICT business and therefore creating opportunities for startups and entrepreneurs to commercialize and scale up their businesses.
                                  </p>
                                  <p>
                                      As ICT Entity, Organisation, Hub or Incubator who aspired to build or develop innovation
                                      projects related to Information Communication and Technology ,You can regi<ster your Entity or Startup here.
                                     
                                  </p>
                                  
                                  <span class="font-monospace fs-6 text-danger p-1 ">Provide appropriate Information !!</span>
                                  
                              </div>
                              <div class="">
                                <a href="{{Route('frontend.registration.register')}}" class="btn btn-primary  m-3 p-2">Register Now</a>  
                                <a href="{{Route('RegisteredEntities')}}" class="btn btn-success m-3 p-2">STARTUP LIST</a>        

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