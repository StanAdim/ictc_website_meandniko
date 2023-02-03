@extends('frontend.layout.main', ['title' => 'National Projects', 'header' => 'National Projects'])
@section('content')
        <div class="container">
            <div class="row d-flex justify-content-center">
              
                <div class="col-10 ">
                      {{-- MESSAGE PASSED  --}}
                @if(session('status'))
                <div class="alert alert-success text-center m-2">
                    {{ session('status') }}
                </div>
              @endif
                {{-- ------------------------======================================== --}}

                    <div class="card mt-2">
                        <img src="{{asset('images/slide-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body text-dark">
                            <p>
                                The government of Tanzania is committed to supporting and enhancing the 
                                growth of the ICT Startup ecosystem as a way of promoting innovation, and 
                                ICT business and therefore creating opportunities for startups and entrepreneurs in both local and international ICT business fraternity.
                            </p>
                            <p>
                                As ICT Professional, Student or Individual who aspired to build or develop innovation
                                projects related to Information Communication and Technology ,You can register your Project or Startup here.
                               
                            </p>
                            
                            <span class="font-monospace fs-6 text-danger p-1 ">Provide appropriate Information !!</span>
                            
                        </div>
                    
                        <div class="card">
                            <div class="card-header">
                                <div class="col d-flex justify-content-between">
                                    <a href="{{Route('ProjectRegisterForm')}}" class="btn btn-primary m-2">Register Project</a>

                                    <a href="{{Route('frontend.registration.register')}}" class="btn btn-primary m-2">Register Startup</a>                                
                                </div>
                            </div>
                            <div class="card-body">
                                
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