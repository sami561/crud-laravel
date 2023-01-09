<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/sginup', function () {
    return view('sginup');
});
Route::get('/creeCompte', function () {
    return view('creeCompte');
});
Route::get('/UpdateCompte', function () {
    return view('updateCompte');
});
Route::get('/delete', function () {
    return view('delete');
});
Route::get('SignupUesr','App\Http\Controllers\ClientController@store');
Route::get('LogUesr','App\Http\Controllers\LoginController@login');
Route::get("compte","App\Http\Controllers\CompteController@index");
Route::get('CreeCompte','App\Http\Controllers\CompteController@store');
Route::get('updateCompte', 'App\Http\Controllers\CompteController@update');
Route::get('/DeleteCompte','App\Http\Controllers\CompteController@destroy'); 