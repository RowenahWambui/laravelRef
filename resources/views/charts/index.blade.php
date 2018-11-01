    @extends('layouts.master')
    @section('content')
    <div class="app">
                {!! $chart->render() !!}
                <aside>
                    {!! $pie->render() !!}
                </aside>
        </div>
      
        <div class="box-body">

            <!-- Display Line Graph here -->
            {!! $bar->render() !!}
      
            </div>
            
      

    @endsection
                