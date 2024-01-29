<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::namespace('CMS')->prefix('cms')->as('cms.')->middleware('auth')->group(function () {
    Route::resource('service', 'ServiceController');
    Route::resource('slider', 'SliderController');
    Route::resource('information', 'InformationController');
    Route::resource('category', 'CategoryController');
    Route::resource('news', 'NewsController');
    Route::resource('layanan', 'LayananController');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\WebController::class, 'home'])->name('web.home');
Route::get('/berita/{slug?}', [App\Http\Controllers\WebController::class, 'berita'])->name('web.berita');


Route::get('/profile', function () {
    return view('pages.profile');
});
Route::get('/informasi', function () {
    return view('pages.informasi');
});

Route::get('/artikel', function () {
    return view('pages.artikel');
});

Route::get('/pelatihan ', function () {
    return view('pages.pelatihan');
});
Route::get('/pengumuman ', function () {
    return view('pages.pengumuman');
});
Route::get('/seminar ', function () {
    return view('pages.seminar');
});
Route::get('/kegiatan ', function () {
    return view('pages.kegiatan');
});

//menu Unggulan
Route::get('/unggulan ', function () {
    return view('pages.unggulan');
});
Route::get('/mcu ', function () {
    return view('pages.mcu');
});
Route::get('/klinik ', function () {
    return view('pages.klinik');
});
Route::get('/homecare', function () {
    return view('pages.homecare');
});
Route::get('/gariarti', function () {
    return view('pages.gariarti');
});
Route::get('/guesthouse', function () {
    return view('pages.guesthouse');
});
//menu rawat inap
Route::get('/ruangmelati', function () {
    return view('pages.ruangmelati');
});

Route::get('/ruanganggrek', function () {
    return view('pages.ruanganggrek');
});

Route::get('/ruangicu', function () {
    return view('pages.ruangicu');
});
Route::get('/ruangintermediate', function () {
    return view('pages.ruangintermediate');

});

Route::get('/ruangkacapiringA', function () {
    return view('pages.ruangkacapiringA');
});
Route::get('/ruangkacapiringB', function () {
    return view('pages.ruangkacapiringB');
});
Route::get('/ruangmawar', function () {
    return view('pages.ruangmawar');
});
Route::get('/ruangpinere', function () {
    return view('pages.ruangtanjung');
});

Route::get('/ruangtanjung', function () {
    return view('pages.ruangtanjung');
});
Route::get('/ruanganterate', function () {
    return view('pages.ruangangterate');
});

Route::get('/pelatihan', function () {
    return view('pages.pelatihan');
});


