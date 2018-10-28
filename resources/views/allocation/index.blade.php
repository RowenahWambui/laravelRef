@extends('layouts.master')

@section('content')
<div class="">
    <div class="box">
        <div class="box-header">
            <h3>Job Allocations</h3>
            <div class="pull-right">
                <div class="input-group">
                    <input type="text" class="form-control pull pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                </div><br>
            </div>

        </div>
        <div class="box-body">
            <table class="table table-bordered table-responsive">
                <thead>    
                    <tr>
                        <th>Name </th>
                        <th>Job Title</th>
                        <th>Job Description</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($refugees as $key => $value)
                    <tr>
                        <td>{{$value->Full_Name}}</td>
                        <td>{{$value->Skill}}</td>
                        <td>{{$value->description}}</td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection()