<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class successcontroller extends Controller
{
    
    public function index()
    {
        $actualities = Actuality::all();
        return view('welcome', compact('actualities'));
    }
}
