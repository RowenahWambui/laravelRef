@extends('layouts.master')

@section('css')
    <style>

    .loading{
        background: lightgray;
        padding: 15px;
        position: relative;
        border-radius: 4px;
        text-align: center;
        display: none;
        left: 50%;
        top: 50%;
    }
        
    </style>
    
@endsection

@section('content')
    <div id="content">
        @include('jobs.index')
    </div>
    <div class="loading">
        <i class="fa fa-refresh fa-spin fa-2x fa-tw"></i>
        <br>
        <span>Loading</span>
    </div>
    
@endsection