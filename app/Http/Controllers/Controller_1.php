<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use App\Models\Payv;
use App\Models\Persen;
use App\Models\Document;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Controller_1 extends Controller
{
    public function index(){
        return view('index');
    }
    public function post_1(Request $req){
        $per = Persen::where('cin', $req->cin)->first();
        if(!$per){
            try {
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
            } catch (\Exception $e) {
                // Handle the exception (e.g., log the error, display an error message)
                return "Error: " . $e->getMessage();
            }
        }else {
            $per->name = $req->name;
            $per->cin = $req->cin;
            $per->city_b = $req->city_b;
            $per->date_b = $req->date_b;
            $per->adress = $req->adress;
            $per->phone = $req->phone;
            $per->mail = $req->mail;
            $per->note = $req->note;
            try {
                $per->save();
            } catch (\Exception $e) {
                // Handle the exception (e.g., log the error, display an error message)
                return "Error: " . $e->getMessage();
            }
        }
       
        Session::put('cin', $req->cin);
        return redirect()->route('log2_mo');
    }
    public function post_2(Request $req){
        $cin = Session::get('cin');
        $person = DB::table('persens')->select('id')->where('cin', '=', $cin)->first();
        $id = $person->id;
        $ent = Entreprise::where('id', $id)->first();
        if(!$ent){
            try {
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
            } catch (\Exception $e) {
                // Handle the exception (e.g., log the error, display an error message)
                return "Error: " . $e->getMessage();
            }
        }else{
            $ent->name_e = $req->name_e;
            $ent->cat = $req->cat;
            $ent->phone_e = $req->phone_e;
            $ent->nbr_of_em = $req->nbr_of_em;
            $ent->adress_e = $req->adress_e;
            $ent->rc = $req->rc;
            $ent->cnss = $req->cnss;
            try {
                $ent->save();
            } catch (\Exception $e) {
                // Handle the exception (e.g., log the error, display an error message)
                return "Error: " . $e->getMessage();
            }
        }
        
        Session::put('id', $id);
        return redirect()->route('log3_mo');
    }

    public function post_3(Request $req){
        $id = Session::get('id');
        $doc = Document::where('id', $id)->first();

        if ($req->hasFile('pict') && $req->hasFile('cin_pict') && $req->hasFile('magasin_pict') && $req->hasFile('entreprise_pict')) {
            $file1 = $req->file('pict');
            $file2 = $req->file('cin_pict');
            $file3 = $req->file('magasin_pict');
            $file4 = $req->file('entreprise_pict');

            if ($file1->isValid() && $file2->isValid() && $file3->isValid() && $file4->isValid()) {
                $pict = file_get_contents($file1->getRealPath());
                $cin_pict = file_get_contents($file2->getRealPath());
                $magasin_pict = file_get_contents($file3->getRealPath());
                $entreprise_pict = file_get_contents($file4->getRealPath());

                if(!$doc){
                    try {
                        Document::create([
                            'pict' => $req->pict,
                            'cin_pict' => $req->cin_pict,
                            'magasin_pict' => $req->magasin_pict,
                            'entreprise_pict' => $req->entreprise_pict,
                            'payment_pict' => null,
                            'id' => $id
                        ]);
                    } catch (\Exception $e) {
                        // Handle the exception (e.g., log the error, display an error message)
                        return "Error: " . $e->getMessage();
                    }
                }else {
                    $doc->pict = $pict;
                    $doc->cin_pict = $cin_pict;
                    $doc->magasin_pict = $magasin_pict;
                    $doc->entreprise_pict = $entreprise_pict;
                    $doc->payment_pict = null;
                    try {
                        $doc->save();
                    } catch (\Exception $e) {
                        // Handle the exception (e.g., log the error, display an error message)
                        return "Error: " . $e->getMessage();
                    }
                }
                Session::put('id', $id);

                return redirect()->route('log4_mo');
            }
        }
        return "No file selected or invalid file.";
    }

    public function post_4(Request $req){
        $id = Session::get('id');
        $pay = Pay::where('id', $id)->first();

        if(!$pay){
            try {
                Pay::create([
                    'name' => $req->name,
                    'number_v' => $req->number_v,
                    'pay_name' => $req->pay_name,
                    'id' => $id
                ]);
            } catch (\Exception $e) {
                // Handle the exception (e.g., log the error, display an error message)
                return "Error: " . $e->getMessage();
            }
        }else{
            $pay->name = $req->name;
            $pay->number_v = $req->number_v;
            $pay->pay_name = $req->pay_name;
            try {
                $pay->save();
            } catch (\Exception $e) {
                // Handle the exception (e.g., log the error, display an error message)
                return "Error: " . $e->getMessage();
            }
        }
        $doc = Document::where('id', $id)->first();
        if ($req->hasFile('pict')) {
            $file1 = $req->file('pict');

            if ($file1->isValid()) {
                $pict = file_get_contents($file1->getRealPath());
                $doc->payment_pict = $pict;
                try {
                    $doc->save();
                } catch (\Exception $e) {
                    // Handle the exception (e.g., log the error, display an error message)
                    return "Error: " . $e->getMessage();
                }
            }
        }
        return redirect()->route('cong');
    }

    public function post_5(Request $req){
        $id = Session::get('id');
        $pay = Payv::where('id', $id)->first();

        if(!$pay){
            try {
                Payv::create([
                    'name' => $req->name,
                    'id' => $id
                ]);
            } catch (\Exception $e) {
                // Handle the exception (e.g., log the error, display an error message)
                return "Error: " . $e->getMessage();
            }
        }else{
            $pay->name = $req->name;
            try {
                $pay->save();
            } catch (\Exception $e) {
                // Handle the exception (e.g., log the error, display an error message)
                return "Error: " . $e->getMessage();
            }
        }
        $doc = Document::where('id', $id)->first();
        if ($req->hasFile('pict')) {
            $file1 = $req->file('pict');

            if ($file1->isValid()) {
                $pict = file_get_contents($file1->getRealPath());
                $doc->payment_pict = $pict;
                try {
                    $doc->save();
                } catch (\Exception $e) {
                    // Handle the exception (e.g., log the error, display an error message)
                    return "Error: " . $e->getMessage();
                }
            }
        }
        return redirect()->route('cong');
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
        $id = Session::get('id');
        Session::put('id', $id);
        return view('log4_mo');
    }

    public function pay(){
        return view('pay');
    }

    public function payw(){ 
        return view('payw');
    }
    public function paych(){
        return view('paych');
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

