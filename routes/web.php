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

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'users',
    'as' => 'users.',
], function () {
    Route::get('/', 'UserController@index')->name('index');
    
    Route::get('create', 'UserController@create')->name('create');
    
    Route::post('store', 'UserController@store')->name('store');
    
    Route::get('{id}', 'UserController@show')->name('show');
    
    Route::get('update/{id}', 'UserController@update');
    
    Route::get('delete/{id}', 'UserController@destroy');
});
