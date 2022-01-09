<?php

use Illuminate\Support\Facades\Route;
//Importando los controladores que vamos creando
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

//Rutas
Route::get('/login', function () {
    return view('login');
});
//Cerrando session de usuario
Route::get('/logout', function () {
    Session::forget('user'); //user: llave de la sesion.
    return redirect('login');
});

Route::post("/login", [UserController::class, 'login']);
Route::get("/", [ProductController::class, 'index']);
Route::get("/detail/{id}", [ProductController::class, 'detail']);
Route::post("/search", [ProductController::class, 'search']);
Route::get("/search", [ProductController::class, 'index']);
Route::post("/add_to_cart", [ProductController::class, 'addToCart']);
Route::get("/carlist", [ProductController::class, 'carList']);
