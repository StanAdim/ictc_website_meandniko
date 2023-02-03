<div class="row row-10">
    <div class="col-sm-12">
        <h5 class="text-capitalize">ATTACHMENT AND DOCUMENTATION</h5>
</div>

<div class="form-group py-2 {{ $errors->has('date_of_incorporation') ? ' has-error' : '' }}">
{{Form::label('date_of_incorporation', 'Date of Incorporation (*)',['class'=>'col-sm-12 control-label pb-2'])}}
<div class="col-sm-12">
    {{Form::text('date_of_incorporation', null,['class'=>'form-control','placeholder'=>'Date of Incorporation','required'=>'required'])}}
    @if ($errors->has('date_of_incorporation'))
        <span class="help-block">
            <b>{{ $errors->first('date_of_incorporation') }}</b>
        </span>
    @endif
</div>
</div>
<div class="form-group py-2 {{ $errors->has('company_registration_document_file') ? ' has-error' : '' }}">
{{Form::label('company_registration_document_file', 'Company Registration Document (PDF)',['class'=>'col-sm-12 control-label pb-2'])}}
<div class="col-sm-12">
    {{ Form::file('company_registration_document_file', ['class'=>'form-control']) }}
    @if ($errors->has('company_registration_document_file'))
        <span class="help-block">
            <b>{{ $errors->first('company_registration_document_file') }}</b>
        </span>
    @endif
</div>
</div>

<div class="form-group py-2 {{ $errors->has('tax_registration_document_file') ? ' has-error' : '' }}">
{{Form::label('tax_registration_document_file', 'Tax Registration Document (PDF',['class'=>'col-sm-12 control-label pb-2'])}}
<div class="col-sm-12">
    {{ Form::file('tax_registration_document_file', ['class'=>'form-control']) }}
    @if ($errors->has('tax_registration_document_file'))
        <span class="help-block">
            <b>{{ $errors->first('tax_registration_document_file') }}</b>
        </span>
    @endif
</div>
</div>

<div class="form-group py-2 {{ $errors->has('logo') ? ' has-error' : '' }}">
{{Form::label('logo', 'Logo (high quality)',['class'=>'col-sm-12 control-label pb-2'])}}
<div class="col-sm-12">
    {{ Form::file('logo', ['class'=>'form-control']) }}
    @if ($errors->has('logo'))
        <span class="help-block">
            <b>{{ $errors->first('logo') }}</b>
        </span>
    @endif
</div>
</div>
</div>