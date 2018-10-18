@extends('layouts.master')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Skills</h3>
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
                        <th>Skill </th>
                        <th>Description</th>
                        <th>Modify</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($skills as $key => $value)
                    <tr>
                        <td>{{$value->Skill}}</td>
                        <td>{{$value->Skill_Description}}</td>
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
                  <h4 class="modal-title">Add Skill</h4>
                </div>
                    {!! Form::open(['route'=>'skills.store','method'=>'POST']) !!}
                <div class="modal-body">
                        @include('skills.form')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                        {!! form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Modal--}}
             
@endsection()
        