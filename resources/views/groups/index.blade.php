@extends('layouts.master')
@section('content')
<div class="pie">

        <center>
            {!! $chart->html() !!}
        </center>
    </div>
    <!-- End Of Main Application -->
    {!! Charts::scripts() !!}
    {!! $charts->script() !!}
@endsection

        