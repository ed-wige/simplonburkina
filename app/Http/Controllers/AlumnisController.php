<?php

namespace App\Http\Controllers;
use App\Alumni;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnisController extends Controller
{
    public function FormAlumni(){

        return view('alumnis.FormAlumni');
    }

  public function liste(){


    $alumnis= Alumni::all();
   

    return view('alumnis.liste');

  }

    
    public function store2(){

        $data= request()->validate([
             
            'nom'=>'required|',
            'prenom'=>'required|',
            'dateDeNaissance'=>'required|date',
            'sexe'=>'required|',
            'formation'=>'required|',
            'etablissement'=>'required|',
            'telephone'=>'required|integer',
            'promotion'=>'required|date',
            'entrepriseActuelle'=>'required|',
            'fonction'=>'required|',
            'nationalite'=>'required|',
           
        
      ]);
       

        Alumni::create($data);
        // Projet::create($data);


        return back();

}
}
