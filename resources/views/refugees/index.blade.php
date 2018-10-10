@extends('layouts.master')
@section('content')
    <div class="box">
    <div class="box-header">
        <div class="full-right">
            <h2>Refugees Table</h2>
        </div>
    </div>
    <div class="box-body">
    <table class="table table-bordered table-responsive">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Country</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Education Level</th>
            <th with="140px" class="text-center">
                <a href="{{route('refugees.create')}}" class="btn btn-success btn-sm">
                    <i class="glyphicon glyphicon-plus"></i> 
                </a>
            </th>
        </tr>
        <?php $no =1;?>
        @foreach($refugee as $key => $value)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$value->First_Name}}</td>
                <td>{{$value->Middle_Name}}</td>
                <td>{{$value->Last_Name}}</td>
                <td>{{$value->Country}}</td>
                <td>{{$value->Age}}</td>
                <td>{{$value->Gender}}</td>
                <td>{{$value->EducationLevel}}</td>
                <td>
                    <!-- <a class="btn btn-info btn-sm" href="{{route('refugees.show',$value->id)}}">
                        <i class="glyphicon glyphicon-th-large"></i></a> -->
                    <a class href="{{route('refugees.edit',$value->id)}}" class="btn btn-success btn-sm">
                    <i class="glyphicon glyphicon-pencil"></i> </a>
                        {!! Form::open(['method' => 'DELETE','route' => ['refugees.destroy',$value->id],'style'=>'display'])!!}
                    <button type="submit" style="display:inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-minus"></i> </button> 
                        {!! Form::close()!!}
                </td>
            </tr>
        @endforeach

    </table>
    </div>
    </div>
@endsection 