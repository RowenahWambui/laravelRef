<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['title','description','qualifications','skill_id'];
    protected $dates = ['recorded_on','updated_on'];

}
