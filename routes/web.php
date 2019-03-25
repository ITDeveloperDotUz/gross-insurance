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





Route::group([
    'middleware' => 'auth',
    'prefix' => 'contract',
    'namespace' => 'Contracts'
    ], function () {

    Route::get('/termination', 'TerminationController@termination')->name('termination');
    Route::post('/terminate', 'TerminationController@terminate')->name('terminate');
    Route::get('/ajaxcontract/{code}', 'TerminationController@ajaxcontract')->name('ajaxcontract');


    Route::get('/list', 'ContractController@getList')->name('contractsList');
    Route::get('/new', 'ContractController@create');
    Route::post('/new', 'ContractController@saveCreated');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
