<div class="row">
    <div class="col-sm-2">
    {!! form::label('Country_Name','Country Name')!!}
    </div>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('Country_Name')? 'has-error': "" }}">
            {{ Form::text('Country_Name',NULL,['class'=>'form-control','id'=>'Country_Name','placeholder'=>'Country Name ']) }}
            {{ $errors->first('Country_Name','<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('Embassy','Embassy')!!}
    </div>
    <div class="col-sm-10">
        <div class="form-group{{ $errors->has('Embassy') ? 'has-error' : "" }} ">
            {{ Form::text('Embassy',NULL,['class'=>'form-control','id'=>'Embassy','placeholder'=>'Embassy Name ']) }}
            {{ $errors->first('Embassy','<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
</div>
