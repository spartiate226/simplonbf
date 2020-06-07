<?php

namespace App\Http\Controllers;

use App\apprenant;
use App\projets;
use Illuminate\Http\Request;

class projetControlleur extends Controller
{
    function index($id_apprenant){
        $proj=new projets();
        $projet=$proj->projet($id_apprenant);
        $nom=apprenant::find($id_apprenant);
        $name=$nom->nom.' '.$nom->prenom;
        return view('projet',['projet'=>$projet,'nom'=>$name]);
    }


}
