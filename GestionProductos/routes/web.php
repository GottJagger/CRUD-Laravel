<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;

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


// Route::get('/productos', [ProductosController::class,'index']);
// Route::get('/productos/agregarProducto', [ProductosController::class,'create']);
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', function(){
    return view('index');
});

Route::resource('productos', ProductosController::class);
Route::resource('usuarios', UsuariosController::class);

Auth::routes();

Route::get('/productos', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::group(['middleware'=>'auth'], function(){


});
