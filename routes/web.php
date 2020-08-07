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

Route::get('/aboutus', function () {
    return view('aboutus');
});

//admin views
Route::get('/admin/AllStar', 'AllStarController@Index');

Route::get('/admin/AwardPlayers', 'AwardPlayersController@Index');

Route::get('/admin/HallOfFame', 'HallOfFameController@Index');

Route::get('/admin/Managers', 'ManagersController@Index');



Route::get('/mongodb',function(){
    return view('mongodb');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
