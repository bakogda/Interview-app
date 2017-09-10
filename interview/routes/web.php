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

Route::get('/members', 'MembersController@index');
Route::get('/members/get_datatable', 'MembersController@get_datatable');
Route::resource('pages','AddMemberController');
Route::get('/memberships', 'MembershipsController@index');
Route::get('/memberships/get_datatables','MembershipsController@getdatatables');
Route::get('/memberships/get_pastdata','MembershipsController@getpastdata');
