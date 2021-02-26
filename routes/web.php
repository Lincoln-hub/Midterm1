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

//Routes for assessmnet
Route::get('/inputs', function ()
{
    //view loginView has to be name of the file in the view
    return view('assessment');
});


Route::post('inputs', 'AssessmentController@index');