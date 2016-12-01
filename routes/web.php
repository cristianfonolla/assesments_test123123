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

use Scool\Assesments\Models\Assesment;
use Scool\Assesments\Models\Grade;
use Scool\Assesments\Models\Scale;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

//    Route::get('/assesments', function () {
//        return view('assesments', ['assesments' => Assesment::all()]);
//    });

    Route::get('/assesments','AssesmentsController@index');

    Route::get('/grade', function () {
        return view('grade', ['grade' => Grade::all()]);
    });

    Route::get('/scale', function () {
        return view('scale', ['scale' => Scale::all()]);
    });

});