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

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['auth','owner']], function () {
    
    Route::resource('owner', 'OwnerController');
    Route::post('owner.indexgedung', 'GedungController@store');
    Route::get('owner.indexgedung', 'GedungController@index');
    Route::get('owner.showgedung/{gedung}', 'GedungController@show');
    Route::get('owner.creategedung', 'GedungController@create');
});

Route::group(['middleware' => ['auth','user']], function () {
    
    Route::get('masyarakat.indexsewa', function () {
        return view('masyarakat.indexsewa');
    });
    Route::get('masyarakat.indexrekomendasi', function () {
        return view('masyarakat.indexrekomendasi');
            });
            Route::get('masyarakat.indexsewa', 'GedungController@index');
            Route::get('masyarakat.showgedung/{gedung}', 'GedungController@show');
});


Route::group(['middleware' => ['auth','admin']], function () {
    
    

    
    Route::resource('masyarakat', 'MasyarakatController');
    Route::resource('admin', 'MasyarakatController');
    Route::resource('profile', 'ProfileController');
    
    
    Route::get('/gedung/{gedung}', 'GedungController@show');
    
    Route::get('/gedung', 'GedungController@index')->name('admin.indexbuilding');
    Route::get('/verification', 'GedungBuildingController@index')->name('admin.buildingverification');
    Route::get('admin.showgedung/{gedung}', 'GedungController@show');
    
    
    

});