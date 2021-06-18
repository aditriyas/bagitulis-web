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
// Auth::routes();


Route::get('/member', function () {
    return view('pages.member.products');
});

Route::get('/admin', function () {
    return view('pages.admin.home');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/collection', 'CollectionController@index')->name('collection');
Route::get('/details', 'DetailsController@index')->name('details');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/update', 'DashboardUpdateController@index')->name('dashboard-update');
Route::get('/dashboard/create', 'DashboardCreateController@index')->name('dashboard-create');


