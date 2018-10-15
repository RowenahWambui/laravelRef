<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['Country_Name', 'Embassy'];
    protected $dates = ['recorded_on', 'updated_on'];
}
