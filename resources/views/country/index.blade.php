@extends('layouts.master')

@section('content')
<div class="">
    <div class="box">
        <div class="box-header">
            <h3>Countries</h3>
            <button type="button" class="btn btn-primary pull pull-right" data-toggle="modal" data-target="#modal-default"> Add Country</button>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-responsive">
                <thead>    
                    <tr>
                {{-- <th>No</th> --}}
                        <th>Country Name</th>
                        <th>Embassy</th>
                        <th>Modify</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($country as $key => $value)
                        <tr>
                            <td>{{$value->Country_Name}}</td>
                            <td>{{$value->Embassy}}</td>
                            <td>
                                 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-country">Edit</button>
                                <button class="btn btn-danger"data-toggle="modal" data-target="#modal-danger">Delete</button> 
                            </td>
                        </tr>
                        @endforeach 
                </tbody>
            </table>
        </div>
    </div>

    {{-- Create Modal --}}

    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">New Country</h4>
            </div>
                {!! Form::open(['route'=>'country.store','method'=>'POST']) !!}
            <div class="modal-body">
                    @include('country.form')
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                    {!! form::close() !!}
                </div>
            </div>
        </div>
    </div>

    {{-- End of Create modal --}}

    {{-- Edit data modal --}}
    <div class="modal fade" id="edit-country" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Details</h4>
            </div>
            {!! Form::model($country,['route'=>['country.update',$value->id],'method'=>'PATCH']) !!}
            <div class="modal-body">
                    @include('country.form')
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                    {!! form::close() !!}
                </div>
            </div>
        </div>
    </div>

    {{--  End of edit modal--}}

    {{-- Delete modal --}}
    <div class="modal modal-danger fade" id="modal-danger">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Delete Info</h4>
            </div>
            {!! Form::open(['method' => 'DELETE','route' => ['country.destroy',$value->id],'style'=>'display'])!!}
                <div class="modal-body">
                    <p>Are you sure you want to delete this?&hellip;</p>
                    <input class="hidden" name="job_id" id="id" value="{{$value->id}} ">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning">Delete</button>
                </div>
                {!! Form::close()!!}
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</div>
@endsection()
