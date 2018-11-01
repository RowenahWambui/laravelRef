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
                    ->dimensions(600, 300)
                    ->responsive(false)
                    ->width(0)
                    ->groupBy('Gender');
                    // ->groupBy('skill_id', null, [1 => 'Teaching', 2 => 'Modelling']);

                    $bar = Charts::database(Refugees::all(), 'bar', 'highcharts')
                                         ->title("Affected Countrty")
                                         ->colors(['#58D68D', '#F44336'])
                                         ->elementLabel("Total")
                                         ->dimensions(800, 400)
                                         ->responsive(false)
                                         ->width(0)
                                         ->groupBy('Country');

                     $pie = Charts::database(Refugees::all(), 'pie', 'highcharts')
                                         ->title("Affected Countrty")
                                         ->colors(['#AED6F1', '#F44336'])
                                         ->elementLabel("Total")
                                         ->dimensions(600, 300)
                                         ->responsive(false)
                                         ->width(0)
                                         ->groupBy('EducationLevel');                    
                                         // ->groupBy('skill_id', null, [1 => 'Teaching', 2 => 'Modelling']);

        return view('charts.index',['chart' => $chart, 'pie' => $pie, 'bar' => $bar,]);

    }

    
    
}
