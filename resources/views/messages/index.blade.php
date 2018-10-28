@extends('layouts.master')

@section('content')
<div class="">
    <div class="box">
        <div class="box-header">
            <h4> Messages</h4>
        </div>
            <table class="table table-bordered table-responsive">
                <thead>    
                    <tr>
                        <th> Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $key => $value)
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->subject}}</td>
                            <td>{{$value->message}}</td>
                        </tr>
                     @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection()