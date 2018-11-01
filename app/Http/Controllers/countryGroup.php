<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Charts;
use App\Refugees;

class countryGroup extends Controller
{
    public function countryGroup(){
            
        $chart = Charts::database(Refugees::all(), 'pie', 'highcharts')
                        ->title("Affected Countrty")
                        ->colors(['#2196F3', '#F44336'])
                        ->elementLabel("Total")
                        ->dimensions(800, 400)
                        ->responsive(false)
                        ->width(0)
                        ->groupBy('Country');
                        // ->groupBy('skill_id', null, [1 => 'Teaching', 2 => 'Modelling']);
    
    
            return view('group.index', ['chart' => $chart]);
        }

}
