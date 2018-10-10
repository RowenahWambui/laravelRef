{{-- @extends('layouts.app') --}}
@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     <a href="https://refcrudtest.000webhostapp.com/refugees/index.blade.php">refugees</a>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
