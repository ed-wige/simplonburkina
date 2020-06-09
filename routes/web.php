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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/', 'welcomecontroller');
Route::get('welcome','welcomecontroller@index');
Route::get('formations','formationscontroller@index')->name('formations');

Route::get('/admin/actualities','actualitiescontroller@create')->name('root_path');

Route::resource('/admin/actualities', 'actualitiescontroller');

Route::get('success','successcontroller@index')->name('root_path');

Route::get('/admin/evenements','evenementscontroller@create')->name('root_path');
Route::resource('/admin/evenements', 'evenementscontroller');




