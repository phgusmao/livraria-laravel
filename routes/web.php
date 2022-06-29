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

#Rotas de login
Route::get('/', function () {
    return view('login');
});

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/menu', [\App\Http\Controllers\LoginController::class, 'signin'])->name('menu');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

#Rotas de usuário
Route::prefix('user')->middleware(['login'])->group(function() {
    Route::get('/new', [\App\Http\Controllers\UserController::class, 'new'])->name('user.new');
    Route::post('/signup', [\App\Http\Controllers\UserController::class, 'signup'])->name('user.signup');
    Route::post('/edit/{id}', [\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::get('/delete/{id}', [\App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
});

#Menu principal
Route::get('/menu', function () {
    return view('menu');
});

Route::get('book/create', 'App\Http\Controllers\BookController@create')->name('create_book');
Route::post('book/create', 'App\Http\Controllers\BookController@store')->name('save_book');
Route::get('book/info', 'App\Http\Controllers\BookController@info')->name('info_book');
Route::get('book/delete/{id}', 'App\Http\Controllers\BookController@destroy')->name('delete_book');
Route::get('book/edit/{id}', 'App\Http\Controllers\BookController@edit')->name('edit_book');
Route::post('book/edit/{id}', 'App\Http\Controllers\BookController@update')->name('refresh_book');

Route::get('user/create', 'App\Http\Controllers\UsuarioController@create')->name('create_user');
Route::post('user/create', 'App\Http\Controllers\UsuarioController@store')->name('save_user');
Route::get('user/info', 'App\Http\Controllers\UsuarioController@info')->name('info_user');
Route::get('user/delete/{id}', 'App\Http\Controllers\UsuarioController@destroy')->name('delete_user');
Route::get('user/edit/{id}', 'App\Http\Controllers\UsuarioController@edit')->name('edit_user');
Route::post('user/edit/{id}', 'App\Http\Controllers\UsuarioController@update')->name('refresh_user');

#Rotas de livros
// Route::prefix('book')->middleware(['login'])->group(function() {
//     Route::get('/new', [\App\Http\Controllers\BookController::class, 'new'])->name('book.new');
//     Route::get('/list', [\App\Http\Controllers\BookController::class, 'list'])->name('book.list');
//     Route::get('/alter', [\App\Http\Controllers\BookController::class, 'alter'])->name('book.alter');
//     Route::post('/signup', [\App\Http\Controllers\BookController::class, 'signup'])->name('book.signup');
//     Route::post('/edit/{id}', [\App\Http\Controllers\BookController::class, 'edit'])->name('book.edit');
//     Route::get('/delete/{id}', [\App\Http\Controllers\BookController::class, 'delete'])->name('book.delete');
//     Route::post('/locar/{id}', [\App\Http\Controllers\BookController::class, 'locar'])->name('book.locar');
//     Route::post('/deslocar/{id}', [\App\Http\Controllers\BookController::class, 'deslocar'])->name('book.deslocar');
// });

#Rotas de gêneros
Route::prefix('genero')->middleware(['login'])->group(function() {
    Route::get('/new', [\App\Http\Controllers\GeneroController::class, 'new'])->name('genero.new');
    Route::get('/list', [\App\Http\Controllers\GeneroController::class, 'list'])->name('genero.list');
    Route::get('/alter', [\App\Http\Controllers\GeneroController::class, 'alter'])->name('genero.alter');
    Route::post('/signup', [\App\Http\Controllers\GeneroController::class, 'signup'])->name('genero.signup');
    Route::post('/edit/{id}', [\App\Http\Controllers\GeneroController::class, 'edit'])->name('genero.edit');
    Route::get('/delete/{id}', [\App\Http\Controllers\GeneroController::class, 'delete'])->name('genero.delete');
});
