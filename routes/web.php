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


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/collection', 'CollectionController@index')->name('collection');
Route::get('/details', 'DetailsController@index')->name('details');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/update', 'DashboardUpdateController@index')->name('dashboard-update');
Route::get('/dashboard/create', 'DashboardCreateController@index')->name('dashboard-create');

Auth::routes();

