<?php

//use Illuminate\Support\Facades\Route;

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



Route::view('/', 'home', ['nombre'=> 'Osvaldo'])->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/politicas', 'App\Http\Controllers\PoliticasController@index')->name('politicas');
Route::view('/contact', 'contact')->name('contact');

Route::resource('PoliticaNum', 'App\Http\Controllers\PoliticasController');
Route::post('contact', 'App\Http\Controllers\MessageController@store');

/*
//Route::get('/', function () {
  //  $nombre = "Lalo";

    //return view('home', ['nombre'=> $nombre]);
//});
*/