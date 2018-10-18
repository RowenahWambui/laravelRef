<div class="row">
        <div class="col-sm-2">
        {!! form::label('Skill','Skill')!!}
        </div>
        <div class="col-sm-10">
            <div class="form-group{{ $errors->has('Skill')? 'has-error': "" }}">
                {{ Form::text('Skill',NULL,['class'=>'form-control','id'=>'Skill','placeholder'=>'Skill ']) }}
                {{ $errors->first('Skill','<p class="help-block">:message</p>') }}
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('Skill_Description','Skill Description')!!}
        </div>
        <div class="col-sm-10">
            <div class="form-group{{ $errors->has('Skill_Description') ? 'has-error' : "" }} ">
                {{ Form::textarea('Skill_Description',NULL,['class'=>'form-control','id'=>'Skill_Description','placeholder'=>'Skill Description']) }}
                {{ $errors->first('Skill Description','<p class="help-block">:message</p>') }}
            </div>
        </div>
    </div>
    </div>
    