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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {



    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('masyarakat.indexrekomendasi', function () {
        return view('masyarakat.indexrekomendasi');
    });
    Route::get('masyarakat.indexsewa', function () {
        return view('masyarakat.indexsewa');
    });
    
    Route::resource('masyarakat', 'MasyarakatController');
    Route::resource('admin', 'MasyarakatController');
    Route::resource('owner', 'OwnerController');
    Route::resource('profile', 'ProfileController');
    Route::get('owner.indexgedung', 'GedungController@index');
    Route::get('admin.indexgedung', 'GedungController@index');
    Route::get('masyarakat.indexsewa', 'GedungController@index');
    Route::post('owner.indexgedung', 'GedungController@store');
    Route::get('owner.showgedung/{gedung}', 'GedungController@show');
    Route::get('admin.indexgedung/{gedung}', 'GedungController@show');
    Route::get('masyarakat.showgedung/{gedung}', 'GedungController@show');
    Route::get('admin.showgedung/{gedung}', 'GedungController@show');
    Route::get('owner.creategedung', 'GedungController@create');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::delete('/owner.showgedung/{gedung}', 'GedungController@destroy');
    Route::get('owner.showgedung/{gedung}/edit', 'GedungController@edit');
    Route::patch('owner.showgedung/{gedung}', 'GedungController@update');
    Route::patch('admin.showgedung/{gedung}', 'GedungController@update');

});