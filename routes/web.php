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

Route::get('users', function () {
    $users = User::all()->toArray();

    return view('starter', [
        'users' => $users
    ]);
})->name('users.index');

Route::view('users/create', 'users/create')->name('users.create');

Route::post('users/store', function (Request $request) {
    $data = $request->all();
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'birthday' => $data['birthday'],
        'password' => bcrypt('123456'),
    ]);

    return redirect()->route('users.index');
})->name('users.store');

Route::get('users/{id}', function ($id) {
    $user = User::find($id);
    dd("Aaaaaa");

    // return view('starter', [
    //     'users' => $users
    // ]);
})->name('users.show');

Route::get('users/update/{id}', function ($id) {
    $user = User::find($id);
    // $user->name = 'Tien';
    // $user->email = 'tien@example.com';
    // $user->save();

    $user->update([
        'name' => 'Abc',
    ]);

    return redirect()->route('users.index');
});

Route::get('users/delete/{id}', function ($id) {
    $user = User::find($id);
    $user->delete();

    return redirect()->route('users.index');
});
