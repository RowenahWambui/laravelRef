@extends('layouts.master')
@section('content')
<div class="app">

        <center>
            {!! $chart->html() !!}
        </center>
    </div>
    <!-- End Of Main Application -->
    {!! Charts::scripts() !!}
    {!! $chart->script() !!}
@endsection

        