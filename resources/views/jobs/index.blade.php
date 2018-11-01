@extends('layouts.master')

@section('content')
<div class="">
    <div class="box">
        <div class="box-header">
            <h3>Job Postings</h3>
            <div class="pull-right">
                <div class="input-group">
                    <input type="text" class="form-control pull pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                </div><br>
                <button type="button" class="btn btn-primary pull pull-right" data-toggle="modal" data-target="#modal-default"> Add Job</button>
            </div>

        </div>
        <div class="box-body">
            <table class="table table-bordered table-responsive">
                <thead>    
                    <tr>
                        <th>Job Title</th>
                        <th>Job Description</th>
                        <th>Job Qualifications</th>
                        {{-- {{request()->session()->get('field' =='qualifications' ?(request()->session()->get('sort')== 'asc'?'&#9652;':'&#9652'):'')}} --}}
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
                            <button class="btn btn-info" data-id="{{$value->id}}"data-name="{{$value->title}}" data-description="{{$value->description}}" data-qualifications="{{$value->qualifications}}" data-toggle="modal" data-target="#editModal">
                                <span class="glyphicon glyphicon-edit"></span> Edit
                            </button>
                            <button class="btn btn-danger"data-toggle="modal" data-target="#modal-danger"  data-myid="{{$value->id}}">Delete</button>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>

        <!--Modal -->
        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">New Job</h4>
            </div>
            {!! Form::open(['route'=>'jobs.store','method'=>'POST']) !!}

                <!--this csrf helps to remove laravel errors incase you click save
                 without any data or if there are no methods to save the data in the db
                 -->
                {{-- {{csrf_field()}} --}}
                <div class="modal-body">
                   @include('jobs.form')
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                {!! form::close() !!}
            </div>
        </div>
      </div>


      <!--Edit Details Modal  -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Edit Job Details</h4>
                </div>
                {!! Form::model($jobs,['route'=>['jobs.update',$value->id],'method'=>'PATCH']) !!}

                        <input type="hidden" name="_method" value="patch">

                        <!--this csrf helps to remove laravel errors incase you click save
                     without any data or if there are no methods to save the data in the db
                     -->
                    {{-- {{csrf_field()}} --}}
                 {{-- this patch method isnt working. It throws an error(MethodNotAllowedHttpException ) --}}
                  {{-- {!! method_field('patch') !!} --}}
                    <div class="modal-body">
                        {{-- <input class="hidden" name="job_id" id="id" value="{{$value->id}} "> --}}
                        @include('jobs.form')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    {!! form::close() !!}

                {{-- </form> --}}
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

                    {!! Form::open(['method' => 'DELETE','route' => ['jobs.destroy',$value->id],'style'=>'display'])!!}
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


@endsection()
