<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camps extends Model
{
    protected $fillable = ['Camp_Name','Camp_Location','Camp_Capacity'];
    protected $dates = ['recorded_on','updated_on'];
}
