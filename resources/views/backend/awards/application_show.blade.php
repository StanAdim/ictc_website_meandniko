@extends('backend.main')
@section('title', 'Show Application')

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
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">Award Application Details</h3>
                            <div class="btn-group pull-right" style="padding-right: 16px; padding-top: 16px">
                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal{{$application->id}}">
                                    Delete
                                </button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <h4 class="text-capitalize">PRIMARY CONTACT INFORMATION</h4>
                                <hr/>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Startup Name</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->startup_name }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Founder Names</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->founder_names }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Phone</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->phone }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>E-mail</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->email }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>City</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->city }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <hr/>
                                <h4 class="text-capitalize">STARTUP GENERAL INFORMATION</h4>
                                <hr/>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Date of Incorporation</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->date_of_incorporation }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Number of Staff</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->no_of_staff }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Product Service</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->product_service }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <p><b>Website</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->website }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <p><b>Startup Description</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->startup_description }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <p><b>Achievements/Accomplishments</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->achievements }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <p><b>List of Major Achievement of this Startup Company</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->major_achievements }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <p><b>Growth Plan</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->growth_plan }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <p><b>Any other Awards / Recognition</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->award_recognition }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <p><b>Why do think you deserve this Award</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->why_your_startup }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <hr/>
                                <h4 class="text-capitalize">ATTACHMENT AND DOCUMENTATION</h4>
                                <hr/>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Company Registration Document</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            @if($application->company_registration_document_file)
                                                <a target="_blank" href="{{url('uploads/award-application/'.$application->company_registration_document_file)}}" class="btn btn-primary">View</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Tax Registration Document</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            @if($application->tax_registration_document_file)
                                                <a target="_blank" href="{{url('uploads/award-application/'.$application->tax_registration_document_file)}}" class="btn btn-primary">View</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Startup Pitch Deck</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            @if($application->startup_pitch_deck)
                                                <a target="_blank" href="{{url('uploads/award-application/'.$application->startup_pitch_deck)}}" class="btn btn-primary">View</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Startup Logo</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            @if($application->startup_logo)
                                                <img src="{{url('uploads/award-application/'.$application->startup_logo)}}" class="img img-thumbnail" height="200px" alt="Responsive image">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Startup's pitch Youtube link</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{$application->pitchdeck_youtube_link}}
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <hr/>
                                <h4 class="text-capitalize">SOCIAL MEDIA AND LINKS</h4>
                                <hr/>
                                <div class="col-md-12">
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <p><b>List of Social Media Links</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->list_of_social_media }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <p><b>Online Resources / Media coverage/Useful links (if any)</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->online_resources }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <hr/>
                                <h4 class="text-capitalize">CONTACT PERSON</h4>
                                <hr/>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Full Name</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->contact_name }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>E-mail</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->contact_email }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <p><b>Phone</b></p>
                                        </div>
                                        <div class="col-sm-12">
                                            {{ $application->contact_phone }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{$application->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="POST" action="{{route('backend.award.application.destroy', $application->uid)}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel{{$application->id}}">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this award application?
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
@endsection
@push('after-scripts')

@endpush
