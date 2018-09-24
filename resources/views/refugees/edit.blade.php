@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          {!! Form::model($refugee,['route'=>['refugees.update',$refugee->id],'method'=>'PATCH']) !!}
            @include('refugees.form_master')
          {!! form::close() !!}
        </div>
    </div>
@endsection        