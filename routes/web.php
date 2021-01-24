<?php

use Illuminate\Support\Facades\{Route, Auth};
use App\Http\Controllers\HomeController;
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
Route::get('/index', function () {
    return view('adminLayout/index');
});
Route::get('/list', [HomeController::class, 'list'])->name('list');
Route::get('list/detail/{dosen:slug}', [HomeController::class, 'detail']);
Route::patch('list/update/{dosen:slug}', [HomeController::class, 'update']);
Route::delete('list/delete/{dosen:slug}', [HomeController::class, 'delete']);
Route::get('/createdsn', [HomeController::class, 'create']);
Route::post('/store', [HomeController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
