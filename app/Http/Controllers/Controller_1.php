<?php

namespace App\Http\Controllers;

use ZipArchive;
use App\Models\Pay;
use App\Models\Payv;
use App\Models\Akhbar;
use App\Models\Persen;
use App\Models\Document;
use Nette\Utils\DateTime;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Notifications\NewUserNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Response;


class Controller_1 extends Controller
{
    public function index(){
        $data1 = Akhbar::orderBy("datePosted", "DESC")->take(5)->get();
        $data = [];

        foreach ($data1 as $item) {
            $data[] = [
                'item' => $item,
                'date_ar' => $this->formatArabicDate($item->datePosted)
            ];
        }
        return view('index')->with([
            'data' => $data
        ]);
    }

    public function post_1(Request $req){
        $req->validate(
            [
                'name' => 'min:6|max:20',
                'cin' => 'min:4|max:8|unique:posts',
                'city_b' => 'min:2|max:15',
                'adress' => 'min:5|max:40',
                'phone' => 'min:10|max:14',
                'mail' => 'email|nullable'
            ],
            [
                'name.min' => 'الإسم قصير جدّا',
                'name.max' => 'الإسم طويل جدّا',
                'cin.min' => 'رقم البطاقة قصير جدّا',
                'cin.max' => 'رقم البطاقة طويل جدّا',
                'cin.unique' => 'انت بالفعل منخرط',
                'city_b.min' => 'إسم المدينة قصير جدّا',
                'city_b.max' => 'إسم المدينة طويل جدّا',
                'adress.min' => 'العنوان قصير جدّا',
                'adress.max' => 'العنوان طويل جدّا',
                'phone.min' => 'الهاتف قصير جدّا',
                'phone.max' => 'الهاتف طويل جدّا',
                'mail.email' => 'البريد الإلكتروني غير صحيح'
            ]
        );
        $per = Persen::where('cin', $req->cin)->first();

        if (!$per) {
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
                return "Error: " . $e->getMessage();
            }
        } else {
            // Existing user, update the details
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
                return "Error: " . $e->getMessage();
            }
        }
        Session::put('cin', $req->cin);
        return redirect()->route('log2_mo');
    }        

    public function post_2(Request $req){
        $ice = $req->ice;
        $req->validate(
            [
                'name_e' => 'min:2|max:20',
                'cat' => 'min:4|max:20',
                'phone_e' => 'min:2|max:15',
                'nbr_of_em' => 'numeric|min:0|max:100',
                'adress_e' => 'min:10|max:40',
                'ice' => 'min:10|max:40',
                'rc' => 'min:10|max:40'
            ],
            [
                'name_e.required' => 'الإسم فارغ',
                'name_e.min' => 'الإسم قصير جدّا',
                'name_e.max' => 'الإسم طويل جدّا',
                'cat.min' => 'نوعية المقاولة قصير جدّا',
                'cat.max' => 'نوعية المقاولة طويل جدّا',
                'phone_e.min' => 'رقم هاتف المقاولة قصير جدّا',
                'phone_e.max' => 'رقم هاتف المقاولة طويل جدّا',
                'nbr_of_em.max' => 'عدد العمال تعدى 200',
                'nbr_of_em.min' => 'عدد العمال غير صحيح',
                'adress_e.min' => 'العنوان قصير جدّا',
                'adress_e.max' => 'العنوان طويل جدّا',
                'ice.min' => 'هوية المقاولة قصير جدّا',
                'ice.max' => 'هوية المقاولة طويل جدّا',
                'rc.min' => 'رقم السجل التجاري قصير جدّا',
                'rc.max' => 'رقم السجل التجاري طويل جدّا'
            ]
        );

        $cin = Session::get('cin');
        $person = DB::table('persens')->select('id')->where('cin', '=', $cin)->first();
        $id = $person->id;
        $ent = Entreprise::where('id', $id)->first();
        if(!$ent){
            $entr = new Entreprise();
            $entr->name_e = $req->name_e;
            $entr->cat = $req->cat;
            $entr->phone_e = $req->phone_e;
            $entr->nbr_of_em = $req->nbr_of_em;
            $entr->adress_e = $req->adress_e;
            $entr->ice = $ice;
            $entr->rc = $req->rc;
            $entr->id = $id;
            try {
                $entr->save();
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
            $ent->ice = $ice;
            $ent->rc = $req->rc;
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

    

    public function post_4(Request $req){
        $req->validate(
            [
                'name' => 'min:6|max:20',
                'number_v' => 'min:10|max:40',
                'pict' => 'file|mimes:jpg,png,pdf|max:1024'
            ],
            [
                'pict.mimes' => 'نقبل فقط JPG أو PNG أو PDF',
                'pict.max' => 'لقد تجاوزت 1 MB',
                'name.min' => 'الإسم قصير جدّا',
                'name.max' => 'الإسم طويل جدّا',
                'number_v.min' => 'رقم الدفع قصير جدّا',
                'number_v.max' => 'رقم الدفع طويل جدّا'
            ]
        );
        $user = auth()->user();
        $id = Session::get('id');
        $pay = Pay::where('id', $id)->first();

        if(!$pay){
            $pay1 = new Pay();
            $pay1->payer = $req->name;
            $pay1->number_v = $req->number_v;
            $pay1->pay_name = $req->pay_name;
            $pay1->id = $id;
            try {
                $pay1->save();
            } catch (\Exception $e) {
                // Handle the exception (e.g., log the error, display an error message)
                return "Error: " . $e->getMessage();
            }
        }else{
            $pay->payer = $req->name;
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
            $file = $req->file('pict');

            if ($file->isValid()) {
                $pict = file_get_contents($file->getRealPath());
                $doc->payment_pict = $pict;
                try {
                    $doc->save();

                    $image_name = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('uploads'), $image_name);
                    
                    // Delete the old image if it exists
                    if ($doc->payment_pict) {
                        $old_image_path = public_path('uploads') . '/' . $doc->payment_pict;
                        if (file_exists($old_image_path)) {
                            unlink($old_image_path);
                        }
                    }
                    $doc->payment_pict = $image_name;
                    
                } catch (\Exception $e) {
                    // Handle the exception (e.g., log the error, display an error message)
                    return "Error: " . $e->getMessage();
                }
            }
        }

        $data = Document::join('persens', 'persens.id', '=', 'documents.id')
            ->where('persens.id', '=', $id)
            ->first();
    
        if ($data) {
            $id = $data->id;
            $name = $data->name;
            $picture = $data->pict;

            Notification::send($user, new NewUserNotification($id, $name, $picture));
            
        }else echo "error notif !!";

        return redirect()->route('cong');
    }

    public function condition(){
        return view('condition');
    }

    public function contact(){
        return view('contact_us');
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

    public function team(){
        return view('team');
    }

    public function law_g(){
        return view('law_g');
    }

    public function law_i(){
        return view('law_i');
    }
    public function single_news($id){
        $akhbar = Akhbar::find($id);

        return view('single_news')->with([
            'akhbar' => $akhbar,
            'date_ar' => $this->formatArabicDate($akhbar->datePosted)
        ]);
    }

    public function single(){
        $data1 = Akhbar::orderBy("datePosted", "DESC")->get();
        $data = [];

        foreach ($data1 as $item) {
            $data[] = [
                'item' => $item,
                'date_ar' => $this->formatArabicDate($item->datePosted),
                'statu' => $this->statu($item->datePosted)
            ];
        }
        return view('single')->with([
            'data' => $data
        ]);
    }
    public function news(){
        $data1 = Akhbar::orderBy("datePosted", "DESC")->get();
        $data = [];

        foreach ($data1 as $item) {
            $data[] = [
                'item' => $item,
                'date_ar' => $this->formatArabicDate($item->datePosted),
                'statu' => $this->statu($item->datePosted)
            ];
        }
        return view('news')->with([
            'data' => $data
        ]);
    }
    
    protected function formatArabicDate($datee) {
        $date = DateTime::createFromFormat('Y-m-d', $datee);
        $m = "";
        $d = $date->format('d');
        $mo = $date->format('m');
        $y = $date->format('Y');
        if ($mo == 1) $m = 'يناير';
        elseif($mo == 2) $m = 'فبراير';
        elseif($mo == 3) $m = 'مارس';
        elseif($mo == 4) $m = 'أبريل';
        elseif($mo == 5) $m = 'ماي';
        elseif($mo == 6) $m = 'يونيو';
        elseif($mo == 7) $m = 'يوليوز';
        elseif($mo == 8) $m = 'غشت';
        elseif($mo == 9) $m = 'شتنبر';
        elseif($mo == 10) $m = 'أكتوبر';
        elseif($mo == 11) $m = 'نونبر';
        else $m = 'دجنبر';
        return $d.' - '.$m.' - '.$y;
    }

    protected function statu($date) {
        $current1 = date('Y-m-d');
        $start = new DateTime($current1);
        $current = new DateTime($date);
        $peri = $start->diff($current);
        $period = $peri->days;
        if ($start > $current) $period *= -1;

        if ($period > 4) $s = 'قادم';
        elseif ($period <= 4 && $period >= 1) $s = 'قريب';
        elseif ($period == 0) $s = 'حالي';
        else $s = 'منتهي';
        return $s;
    }

}

