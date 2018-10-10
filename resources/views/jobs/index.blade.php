@extends('layouts.master')

@section('content')
<div class="">
    <div class="box">
        <div class="box-header">
            <h3>Job Postings</h3>
            <button type="button" class="btn btn-primary pull pull-right" data-toggle="modal" data-target="#modal-default"> Add Job</button>

        </div>
        <div class="box-body">
            <table class="table table-bordered table-responsive">
                <thead>    
                    <tr>
                {{-- <th>No</th> --}}
                        <th>Job Title</th>
                        <th>Job Description</th>
                        <th>Job Qualifications</th>
                        <th>Modify</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $key => $value)
                    <tr>
                        <td>{{$value->title}}</td>
                        <td>{{$value->description}}</td>
                        <td>{{$value->qualifications}}</td>
                        <td>
                            <button type="button" class="btn btn-info" data-mytitle="{{$value->title}}" data-mydescription="{{$value->description}}" data-myqualifications="{{$value->qualifications}}" data-myid="{{$value->id}}" data-toggle="modal" data-target="#edit-modal">Edit</button>
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
              <h4 class="modal-title">New Job</h4>
            </div>
            <form action="{{route('jobs.store')}}" method="POST">
                <!--this csrf helps to remove laravel errors incase you click save
                 without any data or if there are no methods to save the data in the db
                 -->
                {{csrf_field()}}
                <div class="modal-body">
                   @include('jobs.form')
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            <form>
          </div>
        </div>
      </div>


      <!--Edit Details Modal  -->
      <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Edit Job Details</h4>
                </div>
                <form action="{{route('jobs.update', $value->id)}}" method="POST">
                   {{-- {{method_field('patch')}} --}}
                    <!--this csrf helps to remove laravel errors incase you click save
                     without any data or if there are no methods to save the data in the db
                     -->
                    {{csrf_field()}}
                    <div class="modal-body">
                        <input class="hidden" name="job_id" id="id" value="{{$value->id}} ">
                        @include('jobs.form')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
              </div>
            </div>
          </div>


          <!--Warning Modal-->
          <div class="modal modal-danger fade" id="modal-danger">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Delete Info</h4>
                    </div>
                    <form action="{{route('jobs.destroy',$value->id)}}" method="POST">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                        <div class="modal-body">
                            <p>Are you sure you want to delete this?&hellip;</p>
                            <input class="hidden" name="job_id" id="id" value="{{$value->id}} ">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </div>
                    </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>


@endsection()
