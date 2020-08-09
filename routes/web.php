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

Route::post('/admin/AllStar/create','AllStarController@Store');

Route::get('/admin/AllStar/edit/{id}', 'AllStarController@Edit');

Route::post('/admin/AllStar/edit', 'AllStarController@Update');

Route::get('/admin/AllStar/{id}','AllStarController@Show');

Route::get('/admin/AllStar/delete/{id}', 'AllStarController@Delete');

Route::delete('/admin/AllStar/delete', 'AllStarController@Remove');

//AwardPlayers
Route::get('/admin/AwardPlayers', 'AwardPlayersController@Index');

//Hall of fame
Route::get('/admin/HallOfFame', 'HallOfFameController@Index');

//Salary
Route::get('/admin/Salary', 'SalaryController@Index');


//Client views
//Baseball Allstars routes

Route::get('/AllStar','AllStarController@AllStarStore')->name('AllStarStore');

Route::get('/AllStar/{id}','AllStarController@AllStarDetails')->name('AllStarDetails');

//Awardplayers
Route::get('/AwardPlayers','AwardPlayersController@AwardPlayersStore')->name('AwardPlayersStore');

Route::get('/AwardPlayers/{id}','AwardPlayersController@AwardPlayersDetails')->name('AwardPlayersDetails');

//HallOfFame
Route::get('/HallOfFame','HallOfFameController@AwardPlayersStore')->name('HallOfFameStore');

Route::get('/HallOfFame/{id}','HallOfFameController@AwardPlayersDetails')->name('HallOfFameDetails');

Route::get('/mongodb',function(){
    return view('mongodb');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
