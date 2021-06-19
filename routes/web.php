<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', "HomeController@index")->name('home')->middleware('auth');

Route::middleware(['auth','role:member'])->group(function () {
    Route::post('/member/product', "FileController@store")->name('member.product.store');
    Route::get('/member/product/create', "FileController@create")->name('member.product.create');
    Route::get('/member/product/{id}', "FileController@show")->name('member.product.show');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/product', "FileController@index")->name('admin.product.index');
    Route::get('/admin/users', "UserController@index")->name('admin.users.index');
    Route::put('/admin/users', "UserController@update")->name('admin.users.update');
});





Route::get('/collection', 'CollectionController@index')->name('collection');
Route::get('/collection/{id}', 'CollectionController@show')->name('collection.show');
Route::get('/details', 'DetailsController@index')->name('details');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/update', 'DashboardUpdateController@index')->name('dashboard-update');
Route::get('/dashboard/create', 'DashboardCreateController@index')->name('dashboard-create');


