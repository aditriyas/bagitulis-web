<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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

// Halaman awal
Route::get('/', function () {
    return view('pages.home');
});

// Untuk nampilin halaman sukses registrasi
Route::get('/register-success', function () {
    // $status = session('register');
    if (Request::query('success')) {
        return view('pages.register-success');
    }
    return redirect()->route('home');
})->middleware('auth');

Route::get('/home', "HomeController@index")->name('home')->middleware('auth');

// Route milik member
Route::middleware(['auth','role:member'])->group(function () {
    Route::get('/member/product', "FileController@index")->name('member.product.index');
    Route::post('/member/product', "FileController@store")->name('member.product.store');
    Route::put('/member/product', "FileController@update")->name('member.product.update');
    Route::get('/member/product/create', "FileController@create")->name('member.product.create');
    Route::get('/member/product/edit/{id}', "FileController@edit")->name('member.product.edit');
    Route::get('/member/product/{id}', "FileController@show")->name('member.product.show');
    Route::delete('/member/product/{id}', "FileController@destroy")->name('member.product.destroy');
});

// Route milik admin
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/product', "FileController@index")->name('admin.product.index');
    Route::put('/admin/product', "FileController@update")->name('admin.product.update');
    Route::get('/admin/product/edit/{id}', "FileController@edit")->name('admin.product.edit');
    Route::get('/admin/product/{id}', "FileController@show")->name('admin.product.show');
    Route::delete('/admin/product/{id}', "FileController@destroy")->name('admin.product.destroy');
    Route::get('/admin/users', "UserController@index")->name('admin.users.index');
    Route::put('/admin/users', "UserController@update")->name('admin.users.update');
});

Route::get('/collection', 'CollectionController@index')->name('collection');
Route::get('/collection/{id}', 'CollectionController@show')->name('collection.show');
/////////////////////////////////

Route::get('/details', 'DetailsController@index')->name('details');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/update', 'DashboardUpdateController@index')->name('dashboard-update');
Route::get('/dashboard/create', 'DashboardCreateController@index')->name('dashboard-create');


