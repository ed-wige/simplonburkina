<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formationscontroller extends Controller
{
    public function index()
    {
       
        return view('formations');
    }
}
