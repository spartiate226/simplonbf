<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\evenement;
class evenementControlleur extends Controller
{
    function index($pub='actualites'){
        if($pub=="actualites"){
            $actualite=evenement::where('type','=','actualite')->paginate(5);
            return view('accueil',['liste'=>$actualite]);
        }
        if($pub=="evenements"){
            $evenement=evenement::where('type','=','evenement')->paginate(5);
            return view('evenements',['liste'=>$evenement]);
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
