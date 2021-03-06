<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class actualite extends Model
{
    protected $guarded=[];

    function scopeStore(Request $request){
        $actu=self::create([
            "titre"=>$request->titre,
            "contenu"=>$request->contenu,
            "image"=>$request->image->store(),
            "type"=>$request->type,
        ]);
        return $actu;
    }
    function scopels($type){
        $actu=null;
        if($type="actualites"){
            $actu=self::where('type','','actualite')->paginate(10);
        }
        if($type="evenements"){
            $actu=self::where('type','','evenements')->paginate(10);
        }
        return $actu;
    }

    function scopeget($id){
        $actu=self::where('id','',$id)->paginate(10);
        return $actu;
    }
}
