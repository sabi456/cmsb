<?php
use App\Http\Controllers\Controller_1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller2;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::post('/post_3', [Controller2::class, 'post_3'])->name('post_3');

Route::post('/post_4', [Controller2::class, 'post_4'])->name('post_4');

Route::get('/news', [Controller_1::class, 'news'])->name('news');

Route::get('/تواصل-معنا', [Controller_1::class, 'contact'])->name('contact');

Route::get('/single_news{id}', [Controller_1::class, 'single_news'])->name('single_news');

Route::get('/أعضاء-الجمعية', [Controller_1::class, 'team'])->name('team');

//Admin

Route::get('/admin/{name?}', [Controller2::class, 'admin'])->name('admin');

Route::get('/unconfirmed', [Controller2::class, 'unconfirmed'])->name('unconfirmed');

Route::get('/deleted', [Controller2::class, 'deleted'])->name('deleted');

Route::any('confirm-user/{id}', [Controller2::class, 'confirmUser'])->name('confirm-user');

Route::any('/post/{id?}', [Controller2::class, 'show'])->name('post.show');
Route::any('/send-email', [Controller2::class, 'sendEmail'])->name('send.email');

Route::get('/post1/{id?}', [Controller2::class, 'show1'])->name('post1.show');

Route::get('/edit/post/{id}', [Controller2::class, 'edit'])->name('post.edit');

Route::get('/edit1', [Controller2::class, 'edit1'])->name('post.edit1');

Route::put('/deleted/post3/{id}', [Controller2::class, 'restore'])->name('post.restore');

Route::put('/deleted/posts/restore-all', [Controller2::class, 'restoreall'])->name('post.restoreall');

Route::get('/edit_show/{id}', [Controller2::class, 'edit_show'])->name('edit_show');

Route::get('/edit_akhbar/{id}', [Controller2::class, 'edit_akhbar'])->name('edit_akhbar');

Route::get('/page_akhbar', [Controller2::class, 'page_akhbar'])->name('page_akhbar');

Route::any('/add_akhbar', [Controller2::class, 'add_akhbar'])->name('add_akhbar');

Route::put('/update_akhbar/{id}', [Controller2::class, 'update_akhbar'])->name('update_akhbar');

Route::any('/delete_akhbar/{id}', [Controller2::class, 'delete_akhbar'])->name('delete_akhbar');


Route::put('/update/post/{id}', [Controller2::class, 'update'])->name('post.update');

Route::any('/post/delete/{id}', [Controller2::class, 'delete'])->name('post.delete');

Route::any('/delete/soft_delete/{id}', [Controller2::class, 'softd'])->name('softd');

Route::resource('categories', 'CategoryController');

Route::delete('/posts/delete-multiple', [Controller2::class, 'deleteMultiple'])->name('post.deleteMultiple');

Route::get('/users/download', [Controller2::class, 'downloadUsers'])->name('users.download');

Route::get('/show3', [Controller2::class, 'show3'])->name('show3');

Route::get('/Confirm', [Controller2::class, 'confirmed'])->name('confirmed');

Route::any('/deleteUser/{id}', [Controller2::class, 'deletenotif'])->name('deletenotif');

Route::get('/downloadRAR/{pict}/{cin_pict}/{magasin_pict}/{entreprise_pict}/{payment_pict}/{name}', [Controller2::class, 'downloadRAR'])->name('downloadRAR');
Route::get('/download_unconfirmed/{pict}/{cin_pict}/{magasin_pict}/{entreprise_pict}/{payment_pict}/{name}', [Controller2::class, 'download_unconfirmed'])->name('download_unconfirmed');

Route::get('/users/download-all', [Controller2::class, 'downloadAll'])->name('users.downloadAll');

Route::get('/show_admin', [Controller2::class, 'show_admin'])->name('show_admin');

Route::delete('/D_admin/{id}', [Controller2::class, 'delete_admin'])->name('delete_admin');

Route::post('/users/{id}', [Controller2::class, 'up'])->name('up');
// Route::get('/register', [Controller2::class, 'create'])->name('register')->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

// Updated registration routes with middleware
Route::group(['middleware' => 'restrict.registration'], function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->name('register');
        
    Route::post('/register', [RegisteredUserController::class, 'store']);
});