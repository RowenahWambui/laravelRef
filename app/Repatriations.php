<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repatriations extends Model
{
    protected $fillable = ['ref_id','relative_name','Country'];
    protected $dates = ['recorded_on', 'updated_on'];


//    public function ref_name(){
//        return $this->belongsTo(Refugees::class);
//        Repatriations::with('ref_id')->get()
//    }
     
}
