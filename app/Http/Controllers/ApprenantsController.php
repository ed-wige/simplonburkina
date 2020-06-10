<?php

namespace App\Http\Controllers;
use App\apprenant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApprenantsController extends Controller
{
    function portrait(){ 
        $apprenant=apprenant::all();

       return view('simplonniens.portrait');
   }

   function create(){
       return view('simplonniens.Formulaire');
   }

   function strore(Request $request){
       $apprenant=new apprenant();
       $apprenant->nom=$request->nom;
       $apprenant->prenom=$request->prenom;
       $apprenant->date_de_naissance=$request->date_de_naissance;
       $apprenant->genre=$request->genre;
       $apprenant->nationalité=$request->nationalité;
       $apprenant->formation=$request->formation;
       $apprenant->etablissement=$request->etablissement;
       $apprenant->telephone=$request->telephone;
       $apprenant->promotion=$request->promotion;
        $apprenant->photo=$request->photo;

       // if ($request->hasfile('photo')) {  
       //    $file = $request ->file('photo');
       //    $extension = $file->getApprenantOriginalExtension();
       //    $filename = time() .'.' . $extension;
       //    $file->move('style/images/' , $filename);
       //    $apprenant->image = $filename;

       // } else{
       //     return $request;
       //     $apprenant->photo ='';
       // }
       


       $apprenant->save();
       return redirect('Formulaire');
   }
}
