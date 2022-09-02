@extends('backend.main')
@section('title', 'Events List')

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
                        <a href="{{ route('backend.events.create') }}" class="btn btn-primary btn-sm">Add Event</a>
                    </div>
                    <h3 class="panel-title">@yield('title')</h3>
                </div>

                <div class="panel-body">
                    <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created date</th>
                            <th class="min-tablet">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $key => $event)
                            <?php
                            $index = 1 + $key;
                            $title_var = "title_" . App\Helpers\Helper::currentLanguage()->code;
                            $title_var2 = "title_" . env('DEFAULT_LANGUAGE');

                            $description_var = "description_" . App\Helpers\Helper::currentLanguage()->code;
                            $description_var2 = "description_" . env('DEFAULT_LANGUAGE');
                            ?>
                            <tr>
                                <td>{{$index}}</td>
                                <td>{{$event->$title_var ?? $title_var2}}</td>
                                <td>
                                    {{ substr(strip_tags($event->$description_var ?? $description_var2),0,200) }} ...
                                </td>
                                <td>{{date('Y-m-d',strtotime($event->created_at))}}</td>
                                <td>
                                    <a class="btn btn-primary btn-xs" href="{{route('backend.events.edit',$event->id)}}">Edit</a>
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal{{$event->id}}">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form method="POST" action="{{route('backend.events.destroy', $event->id)}}">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel{{$event->id}}">Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this events?
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
                            </div>
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