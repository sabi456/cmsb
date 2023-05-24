<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_1 extends Controller
{
    public function index(){
        return view('index');
    }

    public function condition(){
        return view('condition');
    }

    public function cong(){
        return view('cong');
    }

    public function pack(){
        return view('pack');
    }

    public function log1_mo(){
        return view('log1_mo');
    }

    public function log2_mo(){
        return view('log2_mo');
    }

    public function log3_mo(){
        return view('log3_mo');
    }

    public function log4_mo(){
        return view('log4_mo');
    }

    public function pay(){
        return view('pay');
    }

    public function payv(){
        return view('payv');
    }

    public function law_g(){
        return view('law_g');
    }

    public function law_i(){
        return view('law_i');
    }

    public function single(){
        return view('single');
    }
    public function index_f(){
        return view('index_f');
    }
    
    
}

