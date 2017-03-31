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
    return view('welcome'); //welcome.blade.php
});

Route::get('about','PagesController@about');
Route::resource('songs','SongsController');




Route::get('about',function(){

    $bitfumes = [];
   return view('about',compact('bitfumes'));//about.blade.php

    //1.with
    //2.withBitfumes
    //3.['']
    //4.compact
});
