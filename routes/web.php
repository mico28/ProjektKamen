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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::resource('kamens', 'KamenController');
Route::get('/kamens/{kamen}/edit', 'KamenController@edit');
//TODO popravi ker bo lepše zgledalo al pa ne
Route::get('/kamens/{kamen}', function ($id) {
    $kamen = DB::table('kamens')->find($id);

    return view('kamens.show', compact('kamen'));
});


