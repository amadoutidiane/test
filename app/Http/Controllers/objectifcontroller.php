<?php

namespace App\Http\Controllers;
use App\Objectif;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class objectifcontroller extends Controller
{
    //
  public function index ()
  {
  	return view ("objectif");
  }


    public function store(Request $request)
    {
        $objectif = new objectif ;
        $objectif->nomobjectif=$request->input('nomobjectif');
        $objectif->save();
        return redirect ('activite');
    }
}
