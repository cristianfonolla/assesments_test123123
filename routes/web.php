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

<<<<<<< HEAD
=======
use Scool\Assesments\Models\Assesment;
use Scool\Assesments\Models\Grade;
use Scool\Assesments\Models\Scale;

>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
<<<<<<< HEAD
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
=======

//    Route::get('/assesments','AssesmentsController@index');

});

Route::get('/grade', function () {
    return view('grade', ['grade' => Grade::all()]);
});

Route::get('/scale', function () {
    return view('scale', ['scale' => Scale::all()]);
});
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08
