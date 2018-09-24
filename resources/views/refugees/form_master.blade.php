<div class="row">
    <div class="col-sm-2">
        {!! form::label('First_Name','First Name')!!}
    </div>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('First_Name')? 'has-error': "" }}">
            {{ Form::text('First_Name',NULL,['class'=>'form-control','id'=>'First_Name','placeholder'=>'First Name ']) }}
            {{ $errors->first('First_Name','<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
    {!! form::label('Middle_Name','Middle Name')!!}
    </div>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('Middle_Name') ? 'has-error' : "" }} ">
            {{ Form::text('Middle_Name',NULL,['class'=>'form-control','id'=>'Middle_Name','placeholder'=>'Middle Name ']) }}
            {{ $errors->first('Middle_Name','<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
    {!! form::label('Last_Name','Last Name')!!}
    </div>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('Last_Name') ? 'has-error' : ""  }} ">
            {{ Form::text('Last_Name',NULL,['class'=>'form-control','id'=>'Last_Name','placeholder'=>'Last Name ']) }}
            {{ $errors->first('Last_Name','<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
    {!! form::label('Country','Country')!!}
    </div>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('Country')? 'has-error': "" }}">
            {{ Form::text('Country',NULl,['class'=>'form-control','id'=>'Country','placeholder'=>'Country of origin']) }}
            {{ $errors->first('Country','<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
    {!! form::label('Age','Age')!!}
    </div>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('Age') ? 'has-error' : "" }}">
            {{ Form::text('Age',NULL,['class'=>'form-control','id'=>'Age','placeholder'=>'Age ']) }}
            {{ $errors->first('Age','<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
    {!! form::label('Gender','Gender')!!}
    </div>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('Gender')? 'has-error': "" }}">
            {{ Form::text('Gender',NULL,['class'=>'form-control','id'=>'Gender','placeholder'=>'Gender ']) }}
            {{ $errors->first('Gender','<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
    {!! form::label('EducationLevel','Education Level')!!}
    </div>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('EducationLevel')? 'has-error': "" }}">
            {{ Form::text('EducationLevel',NULL,['class'=>'form-control','id'=>'EducationLevel','placeholder'=>'Education Level ']) }}
            {{ $errors->first('EducationLevel','<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="form-group">
        {!! Form::button(isset($model)? 'update' : 'save', ['class'=> 'btn btn-success', 'type' =>'submit']) !!}
</div>
