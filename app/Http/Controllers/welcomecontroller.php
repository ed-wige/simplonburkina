<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actuality;
use App\Models\Evenement;

class welcomecontroller extends Controller
{
    
    public function index()
    {
        $evenements = Evenement::all();
        $actualities = Actuality::all();
        return view('welcome', compact('actualities','evenements'));
        
    }

    public function formations()
    {
       
        return view('formations');
    }

    public function store(REQUEST $request)
    {
        Actuality::create([
            'titre' => $request->titre,
            'photo' => $request->photo,
            'date' => $request->date,
            'newsactu' => $request->newsactu,
        ]);

        return view('success');
    }

    public function index1()
    {
       
        $evenements = Evenement::all();
        return view('welcome', compact('evenements'));
    }

    public function strore(REQUEST $request)
    {
       Evenement::create([
            'titre' => $request->titre,
            'evendate' => $request->evendate,
            'heure' => $request->heure,
            'lieu' => $request->lieu,
            'evencontenu' => $request->evencontenu
        ]);

        return view('success1');
    }



   
    
    
    
}
