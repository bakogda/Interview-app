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

Route::get('/addmember', function()
{
    return view('pages.addmember');
});

Route::get('/memberships', function()
{
    return view('pages.memberships');
});
