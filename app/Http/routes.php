<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/poll', 'PollController@getPoll');
Route::post('/poll', 'PollController@storePoll');

Route::get('/pollSuccess', 'PollController@pollCreated');

Route::get('/voting', 'VoteController@getVotes');

Route::get('/polls', 'PollController@showPoll');