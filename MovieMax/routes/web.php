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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/main', 'mainPage');
//Route::view('/add', 'addmoviePage');
Route::get('/add', function () {
    return view('addmoviePage');
});

Route::post('sendToDatabase', 'Addmovie@addmovieDatabase');

Route::get('/main','Showmovie@show');

Route::get('/link/{id}', 'linkAdd@addlinkshow');

Route::post('/link/{id}','linkAdd@addlink');

Route::get('/player/{id}', 'Player@PlayMovie');