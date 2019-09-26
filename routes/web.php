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

use App\Http\Controllers\view;

//Route::get('/','Display@show');

Route::get('/', function () {
    return view('index');
});

Route::prefix('customer')->group(function (){
   Route::get('index','CustomerController@index')->name('index.route');
   Route::get('edit','CustomerController@edit')->name('edit.route');
    Route::get('/view/{id}','CustomerController@show')->name('view.route');

   Route::get('index/{name}',function ($name){
   });

   Route::get('create', 'CustomerController@create')->name('create.route');
   Route::post('store','CustomerController@store')->name('store.route');
   Route::get('{id}','CustomerController@edit')->name('edit.route');
   Route::patch('{id}','CustomerController@update')->name('update.route');
   Route::delete('{id}', 'CustomerController@destroy')->name('delete.route');

});
Route::resource('view','Manager');
