<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('LogoutPage');
});
Route::view('/main', 'mainPage');
//Route::view('/add', 'addmoviePage');
Route::get('/add', function () {
    
    if (!Auth::user()->id =1) {
        return redirect('main');
    }
    return view('addmoviePage');
})->middleware('auth');

Route::post('sendToDatabase', 'Addmovie@addmovieDatabase');

Route::get('/main','Showmovie@show');

Route::get('/link/{id}', 'linkAdd@addlinkshow');

Route::post('/link/{id}','linkAdd@addlink');

Route::get('/player/{id}', 'Player@PlayMovie');
Route::get('/deleteCom/{id}','Comment@deleteCom');
Route::post('/addCom/{id}','Comment@addCom');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

