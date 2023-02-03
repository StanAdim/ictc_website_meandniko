@extends('backend.main')
@section('title', 'Project Supervisor|Referee List')

@section('stylesheets')
    <!--DataTables [ OPTIONAL ]-->
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
                        <a href="{{ route('backend.projects.index') }}" class="btn btn-primary btn-lg m-1">Projects</a>
                        <a href="{{ route('backend.projects.creators') }}" class="btn btn-primary btn-lg m-1">Project Creators</a>
                    </div>
                    <h3 class="panel-title">@yield('title')</h3>
                </div>

                {{-- {{-- <div class="panel-body"> --}}
                    <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Names</th>
                            <th>Contacts</th>
                            <th>Field of Experties</th>
                            <th>Nationality</th>
                            <th>Created date</th>
                            <th class="min-tablet">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($supervisors as $key => $supervisor)
                                    @php
                                        $key = $key + 1;
                                    @endphp
                                    
                            <tr class="text-dark">
                                <td>{{$key}}</td>
                                <td>{{$supervisor->firstName}} {{$supervisor->secondName}}</td>

                                <td>
                                    <span class="text-primary">{{$supervisor->phoneNumber}}</span>  
                                    | <span class="text-primary">{{$supervisor->email}}</span> 
                                
                                </td>
                                <td>{{$supervisor->fieldExperties}}</td>
                                <td>{{$supervisor->nationality}}</td>
                                
                                <td>{{date('d-m-Y',strtotime($supervisor->created_at))}}</td>
                                <td>
                                    {{-- <a class="btn btn-primary btn-xs" href="{{route('backend.projects.edit',$project->id)}}">Edit</a>
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal{{$project->id}}">
                                        Delete
                                    </button> --}}
                                </td>
                            </tr>

                            {{-- <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form method="POST" action="{{route('backend.posts.destroy', $post->id)}}">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel{{$post->id}}">Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this posts?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">Yes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        @endforeach
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
@endsection