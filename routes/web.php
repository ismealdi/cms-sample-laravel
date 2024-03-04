<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('login',[ App\Http\Controllers\Auth\LoginController::class, 'dd'])->name('dd');
Route::get('appkm77rsp',[ App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('appkm77rsp',[ App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::namespace('CMS')->prefix('cms')->as('cms.')->middleware('auth')->group(function () {
    Route::resource('service', 'ServiceController');
    Route::resource('slider', 'SliderController');
    Route::resource('information', 'InformationController');
    Route::resource('category', 'CategoryController');
    Route::resource('news', 'NewsController');
    Route::resource('layanan', 'LayananController');
    Route::resource('document', 'DocumentController');
    Route::resource('clayanan', 'ClayananController');
    Route::resource('cdocument', 'CdocumentController');
    Route::resource('galeri', 'GaleriController');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\WebController::class, 'home'])->name('web.home');
Route::get('/berita/{slug?}', [App\Http\Controllers\WebController::class, 'berita'])->name('web.berita');
Route::get('/berita/{slug?}/{id?}', [App\Http\Controllers\WebController::class, 'beritaDetail'])->name('web.berita.detail');
Route::get('/laporan', [App\Http\Controllers\WebController::class, 'laporan'])->name('web.laporan');
Route::get('/laporan/{slug}', [App\Http\Controllers\WebController::class, 'laporanDocument'])->name('web.laporanDocument');
Route::get('/layanan/{slug}', [App\Http\Controllers\WebController::class, 'layanan'])->name('web.layanan');
Route::get('/layanan/{slug}/{slaug?}', [App\Http\Controllers\WebController::class, 'layananDetail'])->name('web.layanan.detail');
Route::get('/galeri', [App\Http\Controllers\WebController::class, 'galeri'])->name('web.galeri');

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

Route::get('/filelaporan', function () {
    return view('pages.filelaporan');
});

Route::get('/sejarah', function () {
    return view('pages.sejarah');
});


