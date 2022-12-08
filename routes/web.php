<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PabrikController;
use App\Http\Controllers\ObatController;

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
    return view('pabrik.all');
});

route::group(['prefix' => '/pabrik'], function(){
    Route::get('/all', [PabrikController:: class, 'index']);
    Route::get('/detail/{pabrik}',[PabrikController::class,'show']);
    Route::get('/create', [PabrikController:: class, 'create']);
    Route::post('/add', [PabrikController:: class, 'store']);
    Route::get('/edit/{pabrik}',[PabrikController::class,'edit']);
    Route::post('/update/{pabrik}', [PabrikController:: class, 'update']);
    Route::delete('/delete/{pabrik}',[PabrikController::class,'destroy']);
});

route::group(['prefix' => '/obat'], function(){
    Route::get('/all', [ObatController:: class, 'index']);
    Route::get('/detail/{obat}',[ObatController::class,'show']);
    Route::get('/create', [ObatController:: class, 'create']);
    Route::post('/add', [ObatController:: class, 'store']);
    Route::get('/edit/{obat}',[ObatController::class,'edit']);
    Route::post('/update/{obat}', [ObatController:: class, 'update']);
    Route::delete('/delete/{obat}',[ObatController::class,'destroy']);
});
