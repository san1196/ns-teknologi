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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');
Route::get('/about/tambah', 'AboutController@tambah')->name('about.tambah');
Route::post('/about/store', 'AboutController@store');
Route::get('/about/edit/{id}', 'AboutController@edit');
Route::put('/about/update/{id}', 'AboutController@update');
Route::get('/about/hapus/{id}', 'AboutController@delete');

Route::get('/client', 'ClientController@index')->name('client');
Route::get('/client/tambah', 'ClientController@tambah')->name('client.tambah');
Route::post('/client/store', 'ClientController@store');
Route::get('/client/edit/{id}', 'ClientController@edit');
Route::put('/client/update/{id}', 'ClientController@update');
Route::get('/client/hapus/{id}', 'ClientController@delete');

Route::get('/brand', 'BrandController@index')->name('brand');
Route::get('/brand/tambah', 'BrandController@tambah')->name('brand.tambah');
Route::post('/brand/store', 'BrandController@store');
Route::get('/brand/edit/{id}', 'BrandController@edit');
Route::put('/brand/update/{id}', 'BrandController@update');
Route::get('/brand/hapus/{id}', 'BrandController@delete');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/contact/tambah', 'ContactController@tambah')->name('contact.tambah');
Route::post('/contact/store', 'ContactController@store');
Route::get('/contact/edit/{id}', 'ContactController@edit');
Route::put('/contact/update/{id}', 'ContactController@update');
Route::get('/contact/hapus/{id}', 'ContactController@delete');