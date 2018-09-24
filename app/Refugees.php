<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refugees extends Model
{
    //get the refugee data
    protected $fillable = ['First_Name','Middle_Name','Last_Name','Country','Age','Gender','EducationLevel'];
    protected $dates = ['recorded_on','updated_on'];
}
