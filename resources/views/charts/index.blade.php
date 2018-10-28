{{-- <!DOCTYPE html>
<html>
    <head>
        <title>Graph</title>
        <script src="tttps://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstap.min.css"/>
        {!! Charts::assets()!!}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>         
   

    {!! Charts::styles() !!}

</head>
<body> --}}
    <!-- Main Application (Can be VueJS or other JS framework) -->
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
    
{{-- </body>
</html> --}}

            