<div class="row">
    <div class="col-sm-2">
        {!! form::label('Full_Name','Full Name')!!}
    </div>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('Full_Name')? 'has-error': "" }}">
            {{ Form::text('Full_Name',NULL,['class'=>'form-control','id'=>'Full_Name','placeholder'=>'Full Name ']) }}
            {{ $errors->first('Full_Name','<p class="help-block">:message</p>') }}
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
<div class="row">
    <div class="col-sm-2">
        {!! form::label('skill_id','Skill Level')!!}
        </div>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('skill_id')? 'has-error': "" }}">
            {{ Form::text('skill_id',NULL,['class'=>'form-control','id'=>'skill_id','placeholder'=>'Skill Level ']) }}
            {{ $errors->first('skill_id','<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="form-group">
        {!! Form::button(isset($model)? 'update' : 'save', ['class'=> 'btn btn-success', 'type' =>'submit']) !!}
</div>
