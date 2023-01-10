<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PabrikController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\sessionController;

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
    return view('login.index');
});

route::group(['prefix' => '/pabrik'], function () {
    Route::get('/all', [PabrikController::class, 'index']);
    Route::get('/detail/{pabrik}', [PabrikController::class, 'show']);
    Route::get('/create', [PabrikController::class, 'create']);
    Route::post('/add', [PabrikController::class, 'store']);
    Route::get('/edit/{pabrik}', [PabrikController::class, 'edit']);
    Route::post('/update/{pabrik}', [PabrikController::class, 'update']);
    Route::delete('/delete/{pabrik}', [PabrikController::class, 'destroy']);
});

route::group(['prefix' => '/obat'], function () {
    Route::get('/all', [ObatController::class, 'index']);
    Route::get('/detail/{obat}', [ObatController::class, 'show']);
    Route::get('/create', [ObatController::class, 'create']);
    Route::post('/add', [ObatController::class, 'store']);
    Route::get('/edit/{obat}', [ObatController::class, 'edit']);
    Route::post('/update/{obat}', [ObatController::class, 'update']);
    Route::delete('/delete/{obat}', [ObatController::class, 'destroy']);
});

route::group(['prefix' => '/login'], function () {
    Route::get('/all', [logincontroller::class, 'index']);
    Route::post('/login', [logincontroller::class, 'login']);
});
route::group(['prefix' => '/register'], function () {
    Route::get('/all', [registercontroller::class, 'index']);
    Route::post('/create', [registercontroller::class, 'create']);
});


route::group(['prefix' => '/session'], function () {
    Route::get('/logout', [sessionController::class, 'logout']);
});
