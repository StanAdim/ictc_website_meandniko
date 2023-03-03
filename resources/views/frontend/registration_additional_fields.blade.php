<div class="col-12 text-dark">
    <h5 class="text-capitalize">ATTACHMENT AND DOCUMENTATION</h5>
</div>
<div class="container">
    <div class="row">

        <div class="col-md-6 wow-outer">
            <div class="form-wrap wow fadeSlideInUp {{ $errors->has('date_of_incorporation') ? ' has-error' : '' }}">
                <label class="form-label-outside text-dark" for="date_of_incorporation">Incorporation Date </label>
                {{Form::text('date_of_incorporation', null,['id'=> 'date_of_incorporation','class'=>'form-input ','placeholder'=>'Date of Incorporation','required'=>'required'])}}
                <div class="col-12 text-dark">
                    @if ($errors->has('date_of_incorporation'))
                    <span class="help-block">
                        <b>{{ $errors->first('date_of_incorporation') }}</b>
                    </span>
                @endif
                </div>
            </div>
        </div>

        <div class="col-md-6 wow-outer">
            <div class="form-wrap wow fadeSlideInUp {{ $errors->has('company_registration_document_file') ? ' has-error' : '' }}">
                <label class="form-label-outside text-dark" for="company_registration_document_file">Company Registration Document (PDF)</label>
                {{Form::file('company_registration_document_file', null,['id'=> 'company_registration_document_file','class'=>'form-control'])}}
                <div class="col-12 text-dark">
                    @if ($errors->has('company_registration_document_file'))
                    <span class="help-block">
                        <b>{{ $errors->first('company_registration_document_file') }}</b>
                    </span>
                @endif
                </div>
            </div>
        </div>


        <div class="col-md-6 wow-outer">
            <div class="form-wrap wow fadeSlideInUp {{ $errors->has('tax_registration_document_file') ? ' has-error' : '' }}">
                <label class="form-label-outside text-dark" for="tax_registration_document_file">Tax Registration Document (PDF)</label>
                {{Form::file('tax_registration_document_file', null,['id'=> 'tax_registration_document_file','class'=>'form-control'])}}
                <div class="col-12 text-dark">
                    @if ($errors->has('tax_registration_document_file'))
                    <span class="help-block">
                        <b>{{ $errors->first('tax_registration_document_file') }}</b>
                    </span>
                @endif
                </div>
            </div>
        </div>




        <div class="col-md-6 wow-outer">
            <div class="form-wrap wow fadeSlideInUp {{ $errors->has('logo') ? ' has-error' : '' }}">
                <label class="form-label-outside text-dark" for="logo">Logo (HD)</label>
                {{Form::file('logo', null,['id'=> 'logo','class'=>'form-control'])}}
                <div class="col-12 text-dark">
                    @if ($errors->has('logo'))
                    <span class="help-block">
                        <b>{{ $errors->first('logo') }}</b>
                    </span>
                @endif
                </div>
            </div>
        </div>


</div>

</div>
