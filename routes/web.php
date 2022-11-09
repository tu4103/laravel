<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});
Route::get('/',[HomeController::class, 'index']);

Route::get('/trang-chu',[HomeController::class, 'index'])->name('pages.home');

Route::get('/admin',[AdminController::class, 'index']);

Route::post('/admin',[AdminController::class, 'dashboard']);
