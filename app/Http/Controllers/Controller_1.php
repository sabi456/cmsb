<?php

namespace App\Http\Controllers;

use App\Models\Persen;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Controller_1 extends Controller
{
    public function index(){
        return view('index');
    }
    public function post_1(Request $req){
        Persen::create([
            'name' => $req->name,
            'cin' => $req->cin,
            'city_b' => $req->city_b,
            'date_b' => $req->date_b,
            'adress' => $req->adress,
            'phone' => $req->phone,
            'mail' => $req->mail,
            'note' => $req->note
        ]);
        Session::put('cin', $req->cin);
        return redirect()->route('log2_mo');
    }
    public function post_2(Request $req){
        $cin = Session::get('cin');
        $person = DB::table('persens')->select('id')->where('cin', '=', $cin)->first();
        $id = $person->id;

        Entreprise::create([
            'name_e' => $req->name_e,
            'cat' => $req->cat,
            'phone_e' => $req->phone_e,
            'nbr_of_em' => $req->nbr_of_em,
            'adress_e' => $req->adress_e,
            'rc' => $req->rc,
            'cnss' => $req->cnss,
            'id' => $id
        ]);
        Session::put('id', $id);
        return redirect()->route('log3_mo');
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

