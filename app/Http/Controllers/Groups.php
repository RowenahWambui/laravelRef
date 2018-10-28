<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Charts;
use App\Refugees;

class Groups extends Controller{

public function genderGroup(){
            
    $chart = Charts::database(Refugees::all(), 'donut', 'highcharts')
                    ->title("Refugee data")
                    ->colors(['#2196F3', '#F44336'])
                    ->elementLabel("Total")
                    ->dimensions(800, 400)
                    ->responsive(false)
                    ->width(0)
                    ->groupBy('Gender');
                    // ->groupBy('skill_id', null, [1 => 'Teaching', 2 => 'Modelling']);


        return view('charts.index', ['chart' => $chart]);
    }
    
}
