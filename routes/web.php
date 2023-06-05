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

Route::get('/وفاكاش', [Controller_1::class, 'payw'])->name('payw');

Route::get('/شعبي-كاش', [Controller_1::class, 'paych'])->name('paych');

Route::get('/القانون-الأساسي', [Controller_1::class, 'law_g'])->name('law_g');

Route::get('/القانون-الداخلي', [Controller_1::class, 'law_i'])->name('law_i');

Route::get('/من-نحن', [Controller_1::class, 'single'])->name('single');

Route::get('/Accueil', [Controller_1::class, 'index_f'])->name('index_f');

Route::post('/post_1', [Controller_1::class, 'post_1'])->name('post_1');

Route::post('/post_2', [Controller_1::class, 'post_2'])->name('post_2');

Route::post('/post_3', [Controller_1::class, 'post_3'])->name('post_3');

Route::post('/post_4', [Controller_1::class, 'post_4'])->name('post_4');

Route::post('/post_5', [Controller_1::class, 'post_5'])->name('post_5');

Route::get('/news', [Controller_1::class, 'news'])->name('news');

Route::get('/تواصل-معنا', [Controller_1::class, 'contact'])->name('contact');

Route::get('/single_news{id}', [Controller_1::class, 'single_news'])->name('single_news');

Route::get('/أعضاء-الجمعية', [Controller_1::class, 'team'])->name('team');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
