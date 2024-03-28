<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


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

//    DASHBOARD
Route::get('/dashboard', [AdminController::class,'index']);

//     USERS 
Route::get('/users', [AdminController::class,'users']);
Route::get('/users-add', [AdminController::class,'usersAdd']);
Route::post('/users-add', [AdminController::class,'usersStore']);
Route::get('/users-delete/{id}', [AdminController::class, 'usersDestroy']);



//    PRODUK
Route::get('/produk', [AdminController::class,'produk']);
Route::get('/produk-add', [AdminController::class,'produkAdd']);
Route::post('/produk-add', [AdminController::class,'produkStore']);
Route::get('/produk-edit/{id}', [AdminController::class,'produkEdit']);
Route::put('/produk-edit/{id}', [AdminController::class,'produkUpdate']);
Route::get('/produk-stok/{id}', [AdminController::class,'produkStokEdit']);
Route::put('/produk-stok/{id}', [AdminController::class,'produkStokUpdate']);
Route::get('/produk-delete/{id}', [AdminController::class, 'produkDestroy']);
Route::get('/pembelian', [AdminController::class,'pembelian']);






