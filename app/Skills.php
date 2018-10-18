<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $fillable = ['Skill', 'Skill_Description'];
    protected $dates = ['recorderd_on', 'updated_on'];
}
