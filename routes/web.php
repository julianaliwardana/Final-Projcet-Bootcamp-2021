<?php

use App\User;
use App\Stock;
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

Route::get('/', function () {
    $stocks = Stock::with('category')->get();
    return view('home', compact('stocks'));
});

// Admin & User
Route::get('/stock', 'StockController@create')->name('create-stock');
Route::get('/stock/detail/{id}', 'StockController@show')->name('detail-stock');

// Admin
Route::post('/stock', 'StockController@store')->name('store-stock');
Route::get('/stock/{id}', 'StockController@edit')->name('edit-stock');
Route::post('/stock/detail/{id}', 'StockController@update')->name('update-stock');
Route::delete('/stock/{id}', 'StockController@destroy')->name('delete-stock');
Route::get('/category', 'CategoryController@index')->name('show-category');
Route::get('/add-category', 'CategoryController@create')->name('create-category');
Route::post('/add-category', 'CategoryController@store')->name('store-category');

// User
Route::get('/invoice', 'InvoiceController@index')->name('my-invoices');
Route::get('/invoice/{id}', 'InvoiceController@create')->name('checkout');
Route::get('/stock/{id}/invoice', 'InvoiceController@show')->name('detail-invoice');
Route::post('/stock/{id}/invoice', 'InvoiceController@store')->name('store-invoice');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
