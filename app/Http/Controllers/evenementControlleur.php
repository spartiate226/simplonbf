<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\evenement;
class evenementControlleur extends Controller
{
    function index($pub='actualites'){
        if($type="actualites"){
            $actualite=evenement::where('type','=','actualite')->paginate(10);
            return view('accueil',['liste'=>$actualite]);
        }
        if($type="evenements"){
            $evenement=evenement::where('type','=','evenements')->paginate(10);
            return view('accueil',['liste'=>$evenement]);
        }
    }

    function create(){
        return view('evform');
    }

    function store(Request $request){
        evenement::create([
            "titre"=>$request->titre,
            "contenu"=>$request->contenu,
            "image"=>$request->image->store('ev_images','public'),
            "type"=>$request->type,
        ]);
        return redirect('publication');
    }
    function show($id){
            $get=evenement::where('id','=',$id)->get();
            return view('single',['publication'=>$get]);
    }
}
