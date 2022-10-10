@extends('backend.main')

@section('title', 'Show Award')



@section('scripts')
    <!--Bootstrap Datepicker [  ]-->
    <script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!--Form Component [ SAMPLE ]-->
    <script src="{{asset('assets/js/demo/form-component.js')}}"></script>
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
            <div class="row">
                <div class="col-md-7">

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">Award Details</h3>
                            <div class="btn-group pull-right" style="padding-right: 16px; padding-top: 16px">
                                <a href="{{route('backend.award.applications', $award->uid)}}" class="btn btn-primary btn-sm">View Application</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Title SW</p></div>
                                        <div class="col-sm-9">
                                            {{ $award->title_sw }}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Title EN</p></div>
                                        <div class="col-sm-9">
                                            {{ $award->title_en }}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Application Deadline</p></div>
                                        <div class="col-sm-9">
                                            {{ $award->application_deadline }}
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Award Date</p></div>
                                        <div class="col-sm-9">
                                            {{ $award->award_date }}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Description SW</p></div>
                                        <div class="col-sm-9">
                                            {!! $award->description_sw !!}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Description EN</p></div>
                                        <div class="col-sm-9">
                                            {!! $award->description_en !!}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Poster SW</p></div>
                                        <div class="col-sm-9">
                                            <img src="{{url('uploads/awards/'.$award->file_sw)}}" class="img-fluid img-thumbnail" alt="Responsive image">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Poster EN</p></div>
                                        <div class="col-sm-9">
                                            <img src="{{url('uploads/awards/'.$award->file_en)}}" class="img-fluid img-thumbnail" alt="Responsive image">
                                        </div>
                                    </div>

                                    <hr/>
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Award Contact Person (Optional)</h3>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Contact Name</p></div>
                                        <div class="col-sm-9">
                                            {{ $award->contact_name }}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Contact Email</p></div>
                                        <div class="col-sm-9">
                                            {{ $award->contact_email }}
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Contact Phone</p></div>
                                        <div class="col-sm-9">
                                            {{ $award->contact_phone }}
                                        </div>
                                    </div>


                                    <hr/>
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Award Extra Details (Optional)</h3>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Award Venue</p></div>
                                        <div class="col-sm-9">
                                            {{ $award->award_venue }}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Short Description SW</p></div>
                                        <div class="col-sm-9">
                                            {!! $award->short_description_sw !!}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3"><p>Short Description EN</p></div>
                                        <div class="col-sm-9">
                                            {!! $award->short_description_en !!}
                                        </div>
                                    </div>


                                    @if($award->attachment_sw)
                                        <div class="row mb-3">
                                            <div class="col-sm-3"><p>Attachment EN</p></div>
                                            <div class="col-sm-9">
                                                <a href="{{url('uploads/award-attachments/'.$award->attachment_sw)}}" class="btn btn-primary">View Previous Attachments</a>
                                            </div>
                                        </div>
                                    @endif


                                    @if($award->attachment_en)
                                        <div class="row mb-3">
                                            <div class="col-sm-3"><p>Attachment EN</p></div>
                                            <div class="col-sm-9">
                                                <a href="{{url('uploads/award-attachments/'.$award->attachment_en)}}" class="btn btn-primary">View Previous Attachments</a>
                                            </div>
                                        </div>
                                    @endif

                                    @if($award->attachment_en)
                                        <div class="row mb-3">
                                            <div class="col-sm-3"><p>Publish</p></div>
                                            <div class="col-sm-9">
                                                @if ($award->published)
                                                    <span class="badge badge-primary">Yes</span>
                                                @else
                                                    <span class="badge badge-danger">No</span>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">Award Categories</h3>
                            <div class="btn-group pull-right" style="padding-right: 16px; padding-top: 16px">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal">Add</button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th class="min-tablet">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($award->categories as $key => $category)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$category->title}}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editModal{{$category->id}}">Edit</button>
                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$category->id}}">Delete</button>
                                        </td>
                                    </tr>

                                    <!--Edit Modal -->
                                    <div class="modal fade" id="editModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{$category->id}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel{{$category->id}}">Edit</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    {!! Form::model($category, ['route' => ['backend.award.category.update', $category->id],'method'=>'PUT','class'=>'form-horizontal','autocomplete'=>'off']) !!}
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                                                    {{Form::label('title', 'Title',['class'=>'col-sm-12 control-label text-left'])}}
                                                                    <div class="col-sm-12">
                                                                        {{ Form::text('title', $category->title,['class'=>'form-control','placeholder'=>'Enter Title']) }}
                                                                        @if ($errors->has('title'))
                                                                            <span class="help-block">
                                                                                <strong>{{ $errors->first('title') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                        </div>
                                    </div>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$category->id}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form method="POST" action="{{route('backend.award.category.destroy', $category->id)}}">
                                            <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{$category->id}}">Delete</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this Category?
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
            </div>
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>


    <!--Edit Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Award Categories</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['route' => 'backend.award.category.store', 'class'=>'form-horizontal','autocomplete'=>'off']) !!}

                <div class="modal-body">
                    <input type="hidden" name="award_id" value="{{$award->id}}" />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                {{Form::label('title', 'Title',['class'=>'col-sm-12 control-label text-left'])}}
                                <div class="col-sm-12">
                                    {{ Form::text('title', null,['class'=>'form-control','placeholder'=>'Enter Title']) }}
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
@push('after-scripts')

@endpush
