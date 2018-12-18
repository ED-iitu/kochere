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
    return view('index');
});

Route::get('/home', 'HorekaController@home')->name('home');

Route::get('/about', 'HorekaController@about')->name('about');

Route::get('/contact', 'HorekaController@contact')->name('contact');

Route::get('/gallery', 'HorekaController@gallery')->name('gallery');

Route::get('/action', 'HorekaController@action')->name('action');

Route::get('/history', 'HorekaController@history')->name('history');

Route::get('/textile', 'HorekaController@textile')->name('textile');

Route::get('/application', 'HorekaController@application')->name('application');

Route::get('/detail', 'HorekaController@detail')->name('detail');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
