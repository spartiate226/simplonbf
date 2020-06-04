<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
    protected $guarded=[];
    function scopeStore(Request $request){
        $actu=self::create([
            "titre"=>$request->titre,
            "contenu"=>$request->contenu,
            "image"=>$request->image->store('storage/ev_images'),
            "type"=>$request->type,
        ]);
        return $actu;
    }
    function scopels($type){
        $actu=null;
        if($type="actualites"){
            $actu=self::where('type','=','actualite')->paginate(10);
        }
        if($type="evenements"){
            $actu=self::where('type','=','evenements')->paginate(10);
        }
        return $actu;
    }

    function scopeget($id){
        $actu=self::where('id','',$id)->get();
        return $actu;
    }
}
