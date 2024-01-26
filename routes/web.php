<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route:: get('/studyclub', function () {
    echo"anda tidak memasukan nama";
});

//latihan pertaama route dengan parameter
Route::get('/studyclub/{nama}', function ($nama) {
   // return view('welcome');
   echo'Selamat Datang di Study Club' .$nama; 
});

Route:: get('/', function () {
    return view('welcome');
});

Route:: get('/latihankirimdata', function () {
    return view('welcome' , ['title'=>'mahasiswa sistem informasi']);
});

Route:: get('/latihankirimdata/{tittle}', function ($tittle) {
    return view('welcome' , ['tittle'=>tittle]);
});

Route::get('/studyclub/angka/{nama}', function ($nama) {
    // return view('welcome');
    echo'Selamat Datang di Study Club' .$nama; 
 });

 Route:: get('/latihanBlade', function () {
    return view('latihan',['data1' => 0]);
});

//latihan
Route:: get('/latihanBlade2', function () {
    return view('Home');
}); */

//latihan
Route::get('/', function () {
    return view ('welcome');
});

Route:: get('/dashboard', function () {
    return view('index');
})->name('dashboard');

use App\Http\Controller\MahasiswaController;
Route::resource('mahasiswa', MahasiswaController::class);
