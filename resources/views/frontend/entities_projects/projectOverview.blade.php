@extends('frontend.layout.main', ['title' => 'Register Project', 'header' => 'Register Project'])
@section('content')
        <div class="container">
            <div class="row d-flex justify-content-center">
              
                <div class="col-10 ">
                      {{-- MESSAGE PASSED  --}}
                @if($status)
                <div class="alert alert-success text-center m-2">
                    {{ $status }}
                </div>
              @endif
                {{-- ------------------------======================================== --}}

                    <div class="card m-4">
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
                            <li class="list-group-item"> Nationality: {{$ownerDetails->nationality}}</li>
                          </ul>                       

                      </div>

                      <div class="card m-4">
                        <div class="card-header text-primary">
                            <span class="">Project Category <b class="text-success">{{$projectDetails->category}}</b> </span>
                        </div>
                        <ul class="list-group list-group-flush text-dark">
                            <li class="list-group-item"> Title: {{$projectDetails->title}} - {{$projectDetails->year}}</li>
                            <li class="list-group-item"> Type: {{$projectDetails->type}}</li>
                            <li class="list-group-item"> Institution: {{$projectDetails->institution}}</li>
                            <li class="list-group-item"> Nomination: 
                                @if( $projectDetails->isNominated === 1)
                                    <span>Nominated</span>
                                @else
                                    <span>Regular</span>
                                @endif
                            </li>
                            <div class="card-header text-center text-primary">
                                <span class="fs-2"><b>Brief</b></span>
                            </div>
                            <li class="list-group-item">{{$projectDetails->brief}}</li>
                          </ul>            

                      </div><div class="card m-4">
                        <div class="card-header text-primary">
                            <span class="">Project Supervisor | Referee <b class="text-success">{{$projectSupervisor->firstName}}  {{$projectSupervisor->secondName}}</b> </span>
                        </div>
                        <ul class="list-group list-group-flush text-dark">
                            <li class="list-group-item"> Contacts: {{$projectSupervisor->phoneNumber}} - {{$projectSupervisor->email}}</li>
                            <li class="list-group-item"> Field of Experties: {{$projectSupervisor->fieldExperties}}</li>
                            <li class="list-group-item"> Nationality: {{$projectSupervisor->nationality}}</li>
                          </ul>            

                      </div>

                </div>
            </div>
        </div>
@endsection
@push('after-scripts')
@endpush

@push('after-styles')
@endpush


