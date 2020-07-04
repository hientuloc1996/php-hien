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
Route::get('/trangchu','PageController@getIndex')->name('trang-chu');
Route::get('sanpham/{type}','PageController@getLoaisp')->name('loai-san-pham');
Route::get('sanphamct/{id}','PageController@getChitiet')->name('chi-tiet-san-pham');
Route::get('/lienhe','PageController@getLienhe')->name('lien-he');
Route::get('/gioithieu','PageController@getGioithieu')->name('gioi-thieu');
Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
]);
Route::get('del-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);
Route::get('trangdathang','PageController@getCheckout')->name('trang-dat-hang');
Route::post('dathang','PageController@postCheckout')->name('dat-hang');