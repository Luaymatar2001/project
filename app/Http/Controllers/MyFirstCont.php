<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstCont extends Controller
{
    //
    public function rauteIndex(){
        return view('interface.index');
    }
    public function rauteInfo(){
        return view('interface.info');
    }
    public function rauteReg(){
        return view('interface.registration');
    }
}
