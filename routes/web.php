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
//Allstar
Route::get('/admin/AllStar', 'AllStarController@Index');

Route::get('/admin/AllStar/create', 'AllStarController@create');

Route::post('/admin/AllStar/create','AllStarController@Create');

Route::get('/admin/AllStar/edit/{id}', 'AllStarController@Edit');

Route::get('/admin/AllStar/{id}','AllStarController@Show');

Route::get('/admin/AllStar/delete/{id}', 'AllStarController@Delete');

//AwardPlayers
Route::get('/admin/AwardPlayers', 'AwardPlayersController@Index');

//Hall of fame
Route::get('/admin/HallOfFame', 'HallOfFameController@Index');


//Managers
Route::get('/admin/Managers', 'ManagersController@Index');



Route::get('/mongodb',function(){
    return view('mongodb');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
