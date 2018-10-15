@extends('layouts.master')

@section('content')
<div class="">
    <div class="box">
        <div class="box-header">
            <h3>Family Reunification</h3>
            <button type="button" class="btn btn-primary pull pull-right" data-toggle="modal" data-target="#modal-default"> Create</button>

        </div>
        <div class="box-body">
            <table class="table table-bordered table-responsive">
                <thead>    
                    <tr>
                        <th>Refugee</th>
                        <th>Name of lost Member</th>
                        <th>Country</th>
                        <th>Modify</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($repatriation as $key => $value)
                        <tr>
                            <td>{{$value->ref_id}}</td>
                            <td>{{$value->lost_relative}}</td>
                            <td>{{$value->Country}}</td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal">Edit</button>
                                <button class="btn btn-danger"data-toggle="modal" data-target="#modal-danger"  data-myid="{{$value->id}}">Delete</button>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"> Add Job</button> --}}
    
        <!--Modal -->
        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">New Family Case</h4>
            </div>
            {!! Form::open(['route'=>'repatriation.store','method'=>'POST']) !!}
            <!--this csrf helps to remove laravel errors incase you click save
                 without any data or if there are no methods to save the data in the db
                 -->
                <div class="modal-body">
                   @include('repatriation.form')
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                {!! form::close() !!}
            </div>
        </div>
      </div>      

          <!--Warning Modal-->
          {{-- <div class="modal modal-danger fade" id="modal-danger">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Delete Info</h4>
                    </div>
                    {!! Form::open(['method' => 'DELETE','route' => ['repatriation.destroy',$value->id],'style'=>'display'])!!}
                        <div class="modal-body">
                            <p>Are you sure you want to delete this?&hellip;</p>
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
            </div> --}}

@endsection()
