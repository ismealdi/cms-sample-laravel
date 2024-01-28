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
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
