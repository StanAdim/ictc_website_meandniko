@extends('frontend.layout.main', ['title' => 'Application Overview', 'header' => 'Application Overview'])
@section('content')
        <div class="container">
            <div class="row d-flex justify-content-center">
              
                <div class="col-10 ">
                      {{-- MESSAGE PASSED  --}}
                @if($status)
                <div class="alert alert-success text-center m-2">
                   <b> 
                       <i>
                           {{ $status }}
                       </i>
                </b>
                </div>
              @endif
                {{-- ------------------------======================================== --}}
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <h2 class="h2 text-center text-primary">Application Overview</h2>
                                        {{-- <div class="card m-4">
                                            <div class="card-header">
                                                <span class="text-primary">Project Owner</span> 
                                                <span class="">
                                                    <b class=" text-success">{{$ownerDetails->firstName}} {{$ownerDetails->secondName}} </b>
                                                </span>
                                                
                                            </div>
                                            <ul class="list-group list-group-flush text-dark">
                                                <li class="list-group-item"> Contacts: {{$ownerDetails->phoneNumber}} {{$ownerDetails->email}}</li>
                                                <li class="list-group-item"> Date of Birth: 
                                                    <span class="text-primary">
                                                        {{date('d-m-Y',strtotime($ownerDetails->dob))}}
                                                    </span>
                                                </li>
                                                <li class="list-group-item"> Gender: {{$ownerDetails->gender}}</li>
                                                <li class="list-group-item"> Region: {{$ownerDetails->region}}</li>
                                                <li class="list-group-item"> District: {{$ownerDetails->district}}</li>
                                                <li class="list-group-item"> Nationality: {{$ownerDetails->nationality}}</li>
                                              </ul>                       
                    
                                          </div> --}}
                                          
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


