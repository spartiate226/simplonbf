<?php

namespace App\Http\Controllers;

use App\apprenant;
use Illuminate\Http\Request;

class apprenantControlleur extends Controller
{
    function index($statut){
        if($statut=='apprenants' || $statut=='alumnis'){
            $appr=apprenant::where('statu','=',$statut)->paginate(5);
            return view('apprenant',['liste'=>$appr]);
        }
    }
}
