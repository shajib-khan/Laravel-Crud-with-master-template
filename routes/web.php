<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//Route::get('/', [UserController::class, 'index']);
Route::get('/', [UserController::class, 'ShowData']);
Route::get('/add-data', [UserController::class, 'AddData']);
Route::post('/store-data', [UserController::class, 'StoreData']);
Route::get('/edit-data/{id}', [UserController::class, 'editData']);
Route::post('/update-data/{id}', [UserController::class, 'updateData']);
Route::get('/delete-data/{id}', [UserController::class, 'deleteData']);



