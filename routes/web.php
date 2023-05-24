<?php
use App\Http\Controllers\Controller_1;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', [Controller_1::class, 'index'])->name('home');

Route::get('/الإنخراط', [Controller_1::class, 'condition'])->name('condition');

Route::get('/تهانينا', [Controller_1::class, 'cong'])->name('cong');

Route::get('/الحزمات', [Controller_1::class, 'pack'])->name('pack');

Route::get('/معلومات-المنخرط', [Controller_1::class, 'log1_mo'])->name('log1_mo');

Route::get('/معلومات-المقاولة', [Controller_1::class, 'log2_mo'])->name('log2_mo');

Route::get('/الوثائق-المطلوبة', [Controller_1::class, 'log3_mo'])->name('log3_mo');

Route::get('/الدفع', [Controller_1::class, 'log4_mo'])->name('log4_mo');

Route::get('/شركة-الدفع', [Controller_1::class, 'pay'])->name('pay');

Route::get('/قسط', [Controller_1::class, 'payv'])->name('payv');

Route::get('/القانون-الأساسي', [Controller_1::class, 'law_g'])->name('law_g');

Route::get('/القانون-الداخلي', [Controller_1::class, 'law_i'])->name('law_i');

Route::get('/من نحن', [Controller_1::class, 'single'])->name('single');

Route::get('/Accueil', [Controller_1::class, 'index_f'])->name('index_f');