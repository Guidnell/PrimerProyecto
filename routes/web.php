<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrincipalController;


Route::get('/hello',HomeController::class);
Route::get('post/mensaje',[PostController::class,'Mensaje']); /*Si el usuario escribe 'post/hello' ingresara al método 'Mensaje'*/
Route::get('post/about/{param?}/{name?}',[PostController::class, 'About']);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/