<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apprenant extends Model
{
    protected $guarded=[];

    function scopegetApprenants(){
        $apprenants=self::paginate(10);
    }

    function scopeaddApprenants(Request $request){
        self::create($request->all());
    }
}
