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
    return view('greeting', ['name' => 'James']);
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('users/{id}', function ($id) {
//     return 'User ' . $id;
// });

// Route::get('/quet-nha', 'Controller@quetNha');

// Route::get('/users', 'Controller@layTatCaNguoiDung');
// Route::get('/laydl','controller@indulieunguoidung');
Route::get('/index','userController@index')->name('index');
Route::get('/create','userController@create')->name('create');
Route::get('show/{id}','userController@show')->name('show');
Route::post('/store','userController@store')->name('store');
Route::get('/edit/{id}','userController@edit')->name('edit');
Route::get('/delete/{id}','userController@xoa')->name('delete');
Route::post('/update/{id}','userController@update')->name('update');