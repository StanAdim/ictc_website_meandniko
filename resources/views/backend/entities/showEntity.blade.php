@extends('backend.main')
@section('title', 'Startup Details')

@section('stylesheets')
    <!--DataTables [ OPTIONAL ]-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link href="{{asset('assets/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
@endsection


@section('scripts')
    <!--DataTables [ OPTIONAL ]-->
    <script src="{{asset('assets/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>

    <!--DataTables Sample [ SAMPLE ]-->
    <script src="{{asset('assets/js/demo/tables-datatables.js')}}"></script>
@endsection


@section('content')
    <div id="content-container">
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">@yield('title')</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->

    @include('backend.partials._breadcrumb')

    @include('backend.partials._alert')

    <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-control">
                    </div>
                    <h3 class="panel-title">{{$requestedEntity->entity_name}}</h3>
                    
                </div>

                {{-- {{-- <div class="panel-body"> --}}
                                        
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item text-dark">
                                    <b class="text-dark">DESCRIPTION: </b>
                                   <p class=" text-primary">

                                    <b>{{$requestedEntity->description}}</b>

                                   </p>
                                </li>
                                <li class="list-group-item text-dark">
                                    <b class="text-dark">REGION: </b>
                                   <span class=" text-warning">
                                    <b>
                                        {{$region}}

                                    </b>
                                </span> 
                                </li>
                                <li class="list-group-item text-dark">
                                    <b class="text-dark">CONTACTS: </b>
                                   <span class=" text-primary">
                                    <b>
                                        {{$requestedEntity->phone}}

                                    </b>
                                </span> | 
                                   <span class=" text-primary">
                                    <b>{{$requestedEntity->email}}</b>
                                   </span>
                                </li>
                                <li class="list-group-item text-dark">
                                    <b class="text-dark">WEBSITE: </b>
                                   <span class=" text-primary">
                                   <b> {{$requestedEntity->website}}</b>
                                </span> | 
                                   <span class=" text-primary">
                                    <b>{{$requestedEntity->list_of_social_media}}</b>
                                </span> | 
                                   <span class=" text-primary">
                                    <b>{{$requestedEntity->date_of_incorporation}}</b>
                                </span> 
                                </li>
                              
                                <li class="list-group-item text-dark">
                                    <b class="text-dark">PERSON OF CONTACT: </b>
                                   <span class=" text-primary">
                                    <b>{{$requestedEntity->contact_name}}</b>
                                    </span> | 
                                   <span class=" text-primary">
                                    <b>{{$requestedEntity->contact_email}}</b>
                                    </span> | 
                                   <span class=" text-primary">
                                    <b>{{$requestedEntity->contact_phone}}</b>
                                    </span> 
                                </li>
                                <li class="list-group-item text-dark">
                                    <b class="text-dark">REGISTRATION: </b>
                                    @if ($requestedEntity->is_registered === 1)

                                    <span class=" text-success"> <b>Registered</b></span>

                                        @else
                                    <span class=" text-danger"><b>Not registered</b></span>

                                    @endif
                                </li>

                              </ul>

                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
@endsection