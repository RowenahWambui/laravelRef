<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refugees extends Model
{
    //get the refugee data
    protected $fillable = ['Full_Name','Country','Age','Gender','EducationLevel','skill_id'];
    protected $dates = ['recorded_on','updated_on'];
}
