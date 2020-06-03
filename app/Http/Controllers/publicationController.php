<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicationController extends Controller
{
    function index($pub){
        $publication=new actualite();
        $liste=$publication->ls($pub);
        return view('accueil',['liste'=>$liste]);
    }

    function create(){
        return view('actualiteform');
    }

    function store(Request $request){
        $publication=new actualite();
        $publication->Store($request);
        return redirect('actualiteform');
    }
    function show($id){
        $publication=new actualite();
        $get=$publication->get($id);
        return view('single',['pub'=>$get]);
    }
}
