@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          {!! Form::open(['route'=>'refugees.store','method'=>'POST']) !!}
            @include('refugees.form_master')
          {!! form::close() !!}
        </div>
    </div>
@endsection        