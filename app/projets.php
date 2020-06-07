<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projets extends Model
{
    protected $guarded=[];
    function projet($id_apprenant){
        $projet=[];
        $projetrealiser=projet_realiser::where('id_apprenant','=',intval($id_apprenant))->get();
        foreach ($projetrealiser as $projetrealiser){
            $projet[]=projets::find($projetrealiser->id_projet);
        }
        return $projet;
    }
}
