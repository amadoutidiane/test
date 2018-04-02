<?php

namespace App\Http\Controllers;
use App\ Indicateur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indicateurcontroller extends Controller
{
    //
    public function index ()
    {
    	return view ('indicateur');
    }

    public function store(Request $request)
    {
        $indicateur = new indicateur ;
        $indicateur->nomindicateur=$request->input('nomindicateur');
        $indicateur->valeurindicateur=$request->input('valeurindicateur');
        $indicateur->save();

      /*   if(Input::get('enregistrer')) {
             
                echo "save yes";                   //if login then use this method
              
        } elseif(Input::get('ajouter')) {

            return back()->withInput(); //if register then use this method
        }*/

              //if login then use this method
      
        
    }

    public function ajouter ()
    {
    	 return back()->withInput();
    }
}
