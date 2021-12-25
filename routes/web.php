<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataAdminController;

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

Route::get('/', function () { return view('welcome'); });
Route::get('/home', [HomeController::class, 'index']);
Route::get('/dataadmin', [DataAdminController::class, 'index'])->name('dataadmin');
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dataadmin/add', [DataAdminController::class, 'add']);
Route::post('/dataadmin/insert', [DataAdminController::class, 'insert']);
Route::get('/dataadmin/detail/{id}', [DataAdminController::class, 'detail']);
Route::get('/dataadmin/edit/{id}', [DataAdminController::class, 'edit']);
Route::post('/dataadmin/update/{id}', [DataAdminController::class, 'update']);
Route::get('/dataadmin/delete/{id}', [DataAdminController::class, 'delete']);