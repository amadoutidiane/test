<?php

namespace App\Http\Controllers;
use App\Activite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class activitecontroller extends Controller
{
     public function index ()
  {
  	return view ("activite");
  }


    public function store(Request $request)
    {
        $activite = new activite ;
        $activite->libelleactvite=$request->input('libelleactvite');
        $activite->Periode=$request->input('Periode');
        $activite->save();
   //     return redirect ('activite');
    }
}
