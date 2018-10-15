<div class="row">
        <div class="col-sm-2">
        {!! form::label('Refugee_Name','Refugee Name')!!}
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
            {!! form::label('relative_name','Lost Relative')!!}
        </div>
        <div class="col-sm-10">
            <div class="form-group{{ $errors->has('relative_name') ? 'has-error' : "" }} ">
                {{ Form::text('relative_name',NULL,['class'=>'form-control','id'=>'relative_name','placeholder'=>'Lost Relative ']) }}
                {{ $errors->first('relative_name','<p class="help-block">:message</p>') }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('Country','Country ')!!}
        </div>
        <div class="col-sm-10">
            <div class="form-group{{ $errors->has('Country') ? 'has-error' : ""  }} ">
                {{ Form::text('Country',NULL,['class'=>'form-control','id'=>'Country','placeholder'=>'Country ']) }}
                {{ $errors->first('Country','<p class="help-block">:message</p>') }}
            </div>
        </div>
    </div>
    {{-- <div class="form-group">
        {!! Form::button(isset($model)? 'update' : 'save', ['class'=> 'btn btn-success', 'type' =>'submit']) !!}
    </div> --}}
    </div>
