@extends('frontend.layout.main', ['title' => 'Award', 'header' => 'Award'])
@section('content')
    @php
        $title_var = "title_" . App\Helpers\Helper::currentLanguage()->code;
        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');

        $file_var = "file_" . App\Helpers\Helper::currentLanguage()->code;
        $file_var2 = "file_" . env('DEFAULT_LANGUAGE');

        $description_var = "description_" . App\Helpers\Helper::currentLanguage()->code;
        $description_var2 = "description_" . env('DEFAULT_LANGUAGE');
    @endphp

    <section class="section section-lg mt-4">
        <div class="container">
            <div class="row">
                <div class="offset-2 col-lg-8">
                    <article class="post-creative">
                        <h3 class="post-creative-title">
                            Application for {{$award->$title_var ?? $title_var2}}
                        </h3>
                        <ul class="post-creative-meta">
                            <li>
                                <span class="icon mdi mdi-calendar-clock"></span>
                                <time datetime="{{\Carbon\Carbon::parse($award->created_at)->year}}">
                                    Deadline: {{\Carbon\Carbon::parse($award->application_deadline)->format('M d, Y \a\t h:i A')}}
                                </time>
                            </li>
                            <li>
                                <span class="icon mdi mdi-tag-multiple"></span>
                                <a href="#">Awards</a>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>

            <div class="row">
                <div class="offset-md-2 col-md-8">
                    {!! Form::open(['route' => 'frontend.application.store', 'class'=>'form-horizontal','autocomplete'=>'off', 'files' => true]) !!}

                    <h5 class="text-capitalize">PRIMARY CONTACT INFORMATION</h5>
                    <input type="hidden" name="award_id" value="{{$award->id}}" />

                    <div class="form-group py-2 {{ $errors->has('startup_name') ? ' has-error' : '' }}">
                        {{Form::label('startup_name', 'Startup Name (*)',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::text('startup_name', null,['class'=>'form-control','placeholder'=>'Enter Startup Name'])}}
                            @if ($errors->has('startup_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('startup_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('founder_names') ? ' has-error' : '' }}">
                        {{Form::label('founder_names', 'Founder / Co-founders (*)',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::text('founder_names', null,['class'=>'form-control','placeholder'=>'Enter Name of founder / Co-founders'])}}
                            @if ($errors->has('founder_names'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('founder_names') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('phone') ? ' has-error' : '' }}">
                        {{Form::label('phone', 'Phone Number (*)',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::text('phone', null,['class'=>'form-control','placeholder'=>'Enter Phone Number'])}}
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('email') ? ' has-error' : '' }}">
                        {{Form::label('email', 'Email (*)',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::text('email', null,['class'=>'form-control','placeholder'=>'Enter Email'])}}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('city') ? ' has-error' : '' }}">
                        {{Form::label('city', 'City (*)',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::text('city', null,['class'=>'form-control','placeholder'=>'Enter City'])}}
                            @if ($errors->has('city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <h5 class="text-capitalize">STARTUP GENERAL INFORMATION</h5>

                    <div class="form-group py-2 {{ $errors->has('startup_description') ? ' has-error' : '' }}">
                        {{Form::label('startup_description', 'Brief About Your Startup (*)',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::textarea('startup_description', null,['class'=>'form-control','placeholder'=>'Write some brief about your startup'])}}
                            @if ($errors->has('startup_description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('startup_description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('date_of_incorporation') ? ' has-error' : '' }}">
                        {{Form::label('date_of_incorporation', 'Date of Incorporation (Date your company was registered)',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::text('date_of_incorporation', null,['class'=>'form-control','placeholder'=>'Write Date of Incorporation'])}}
                            @if ($errors->has('date_of_incorporation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date_of_incorporation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('no_of_staff') ? ' has-error' : '' }}">
                        {{Form::label('no_of_staff', 'No. of Staff / Employee',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::text('no_of_staff', null,['class'=>'form-control','placeholder'=>'Write Number of staff'])}}
                            @if ($errors->has('no_of_staff'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('no_of_staff') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('product_service') ? ' has-error' : '' }}">
                        {{Form::label('product_service', 'Key Product / Services',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::text('product_service', null,['class'=>'form-control','placeholder'=>'Write Key Product / Services'])}}
                            @if ($errors->has('product_service'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('product_service') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('website') ? ' has-error' : '' }}">
                        {{Form::label('website', 'Website URL',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::text('website', null,['class'=>'form-control','placeholder'=>'Write Website url'])}}
                            @if ($errors->has('website'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('website') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('achievements') ? ' has-error' : '' }}">
                        {{Form::label('achievements', 'Achievements/Accomplishments',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::textarea('achievements', null,['class'=>'form-control','placeholder'=>'Your achievements/ accomplishments till date'])}}
                            @if ($errors->has('achievements'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('achievements') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('major_achievements') ? ' has-error' : '' }}">
                        {{Form::label('major_achievements', 'List Major Achievement of your Startup Company',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::textarea('major_achievements', null,['class'=>'form-control','placeholder'=>'List Major Achievement of your Startup Company'])}}
                            @if ($errors->has('major_achievements'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('major_achievements') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('major_achievements') ? ' has-error' : '' }}">
                        {{Form::label('impact_of_startup', 'Impact of your startup towards the industry',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::textarea('impact_of_startup', null,['class'=>'form-control','placeholder'=>'Write Impact of your startup towards the industry'])}}
                            @if ($errors->has('impact_of_startup'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('impact_of_startup') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('growth_plan') ? ' has-error' : '' }}">
                        {{Form::label('growth_plan', 'What is the growth plan of your company?',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::textarea('growth_plan', null,['class'=>'form-control','placeholder'=>'Enter growth plan'])}}
                            @if ($errors->has('growth_plan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('growth_plan') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('award_recognition') ? ' has-error' : '' }}">
                        {{Form::label('award_recognition', 'Any other Awards / Recognition',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::textarea('award_recognition', null,['class'=>'form-control','placeholder'=>'If you have won'])}}
                            @if ($errors->has('award_recognition'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('award_recognition') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('why_your_startup') ? ' has-error' : '' }}">
                        {{Form::label('why_your_startup', 'Why do think you deserve this Award?',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::textarea('why_your_startup', null,['class'=>'form-control','placeholder'=>''])}}
                            @if ($errors->has('why_your_startup'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('why_your_startup') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <h5 class="text-capitalize">ATTACHMENT AND DOCUMENTATION</h5>

                    <div class="form-group py-2 {{ $errors->has('company_registration_document_file') ? ' has-error' : '' }}">
                        {{Form::label('company_registration_document_file', 'Company Registration Document?',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{ Form::file('company_registration_document_file', ['class'=>'form-control']) }}
                            @if ($errors->has('company_registration_document_file'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('company_registration_document_file') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('tax_registration_document_file') ? ' has-error' : '' }}">
                        {{Form::label('tax_registration_document_file', 'Tax Registration Document?',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{ Form::file('tax_registration_document_file', ['class'=>'form-control']) }}
                            @if ($errors->has('tax_registration_document_file'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tax_registration_document_file') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('startup_logo') ? ' has-error' : '' }}">
                        {{Form::label('startup_logo', 'Startup logo (high quality)',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{ Form::file('startup_logo', ['class'=>'form-control']) }}
                            @if ($errors->has('startup_logo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('startup_logo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('startup_pitch_deck') ? ' has-error' : '' }}">
                        {{Form::label('startup_pitch_deck', 'Startup Pitch Deck (PDF/PPT) ',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{ Form::file('startup_pitch_deck', ['class'=>'form-control']) }}
                            @if ($errors->has('startup_pitch_deck'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('startup_pitch_deck') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <h5 class="text-capitalize">SOCIAL MEDIA AND LINKS</h5>

                    <div class="form-group py-2 {{ $errors->has('list_of_social_media') ? ' has-error' : '' }}">
                        {{Form::label('list_of_social_media', 'List of Social Media Links',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::textarea('list_of_social_media', null,['class'=>'form-control','placeholder'=>''])}}
                            @if ($errors->has('list_of_social_media'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('list_of_social_media') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('online_resources') ? ' has-error' : '' }}">
                        {{Form::label('online_resources', 'Online Resources / Media coverage/Useful links (if any)',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::textarea('online_resources', null,['class'=>'form-control','placeholder'=>''])}}
                            @if ($errors->has('online_resources'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('online_resources') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <h5 class="text-capitalize">CONTACT PERSON</h5>

                    <div class="form-group py-2 {{ $errors->has('contact_name') ? ' has-error' : '' }}">
                        {{Form::label('contact_name', 'Full Name (*)',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::text('contact_name', null,['class'=>'form-control','placeholder'=>'Enter Contact Name'])}}
                            @if ($errors->has('contact_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contact_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('contact_email') ? ' has-error' : '' }}">
                        {{Form::label('contact_email', 'Email (*)',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::text('contact_email', null,['class'=>'form-control','placeholder'=>'Enter Contact Email'])}}
                            @if ($errors->has('contact_email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contact_email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group py-2 {{ $errors->has('contact_phone') ? ' has-error' : '' }}">
                        {{Form::label('contact_phone', 'Phone (*)',['class'=>'col-sm-12 control-label pb-2'])}}
                        <div class="col-sm-12">
                            {{Form::text('contact_phone', null,['class'=>'form-control','placeholder'=>'Enter Contact Phone'])}}
                            @if ($errors->has('contact_phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contact_phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <button class="btn btn-primary btn-block" type="submit">Send Application</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
@push('after-scripts')
@endpush

@push('after-styles')
@endpush