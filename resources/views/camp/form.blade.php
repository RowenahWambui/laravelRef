    <div class="row">
        <div class="col-sm-2">
        {!! form::label('Camp_Name','Camp Name')!!}
        </div>
        <div class="col-sm-10">
            <div class="form-group{{ $errors->has('Camp_Name')? 'has-error': "" }}">
                {{ Form::text('Camp_Name',NULL,['class'=>'form-control','id'=>'Camp_Name','placeholder'=>'Camp Name ']) }}
                {{ $errors->first('Camp_Name','<p class="help-block">:message</p>') }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            {!! form::label('Camp_location','Camp Location')!!}
        </div>
        <div class="col-sm-10">
            <div class="form-group{{ $errors->has('Camp_Location') ? 'has-error' : "" }} ">
                {{ Form::text('Camp_Location',NULL,['class'=>'form-control','id'=>'Camp_Location','placeholder'=>'Camp Location ']) }}
                {{ $errors->first('Camp_Location','<p class="help-block">:message</p>') }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('Camp_Capacity','Camp Capacity')!!}
        </div>
        <div class="col-sm-10">
            <div class="form-group{{ $errors->has('Camp_Capacity') ? 'has-error' : ""  }} ">
                {{ Form::text('Camp_Capacity',NULL,['class'=>'form-control','id'=>'Camp_Capacity','placeholder'=>'Camp Capacity']) }}
                {{ $errors->first('Camp_Capacity','<p class="help-block">:message</p>') }}
            </div>
        </div>
    </div>
    {{-- <div class="form-group">
        {!! Form::button(isset($model)? 'update' : 'save', ['class'=> 'btn btn-success', 'type' =>'submit']) !!}
    </div> --}}
    </div>
