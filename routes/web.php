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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/new','ControController@index');
Route::post('/new','ControController@input');

Route::get('/new','ControController@index');
Route::get('/','ShowController@index');
Route::get('/gt/{code}','ControController@check');
