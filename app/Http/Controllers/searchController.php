<?php

namespace App\Http\Controllers;

use App\apprenant;
use App\evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    function index($type,Request $request){
        $result=null;
        if($type=='evenement' || $type =='actualite'){
            $result=evenement::query()->where('titre','LIKE',"%{$request->search}%")->get();
            return view('searchevenement',['liste'=>$result]);
        }
        if($type=='apprenant'){
            $result=apprenant::query()->where('nom','LIKE',"%{$request->search}%")->orWhere('prenom','LIKE',"%{$request->search}%")->get();
            return view('searchapprenant',['liste'=>$result]);
        }
    }
}
