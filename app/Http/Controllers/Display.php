<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Display extends Controller
{
    public function show(){
        return view('view');
    }
    public function edit(){
        return view('edit');
    }
}
