<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PabrikController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\Admincontroller;


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

// route::group(['prefix' => '/pabrik'], function () {
//     Route::get('/all', [PabrikController::class, 'index']);
//     Route::get('/detail/{pabrik}', [PabrikController::class, 'show']);
//     Route::get('/create', [PabrikController::class, 'create']);
//     Route::post('/add', [PabrikController::class, 'store']);
//     Route::get('/edit/{pabrik}', [PabrikController::class, 'edit']);
//     Route::post('/update/{pabrik}', [PabrikController::class, 'update']);
//     Route::delete('/delete/{pabrik}', [PabrikController::class, 'destroy']);
// });

// route::group(['prefix' => '/obat'], function () {
//     Route::get('/all', [ObatController::class, 'index']);
//     Route::get('/detail/{obat}', [ObatController::class, 'show']);
//     Route::get('/create', [ObatController::class, 'create']);
//     Route::post('/add', [ObatController::class, 'store']);
//     Route::get('/edit/{obat}', [ObatController::class, 'edit']);
//     Route::post('/update/{obat}', [ObatController::class, 'update']);
//     Route::delete('/delete/{obat}', [ObatController::class, 'destroy']);
// });

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

// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware('auth');

// Route::post('/admin', function () {
//     return view('admin.index');
// });
Route::get('/admin', function () {
    return view('admin.index');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/obat/all', [ObatController::class, 'index']);
    Route::get('/obat/detail/{obat}', [ObatController::class, 'show']);
    Route::get('/obat/create', [ObatController::class, 'create']);
    Route::post('/obat/add', [ObatController::class, 'store']);
    Route::get('/obat/edit/{obat}', [ObatController::class, 'edit']);
    Route::post('/obat/update/{obat}', [ObatController::class, 'update']);
    Route::delete('/obat/delete/{obat}', [ObatController::class, 'destroy']);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/pabrik/all', [PabrikController::class, 'index']);
    Route::get('/pabrik/detail/{pabrik}', [PabrikController::class, 'show']);
    Route::get('/pabrik/create', [PabrikController::class, 'create']);
    Route::post('/pabrik/add', [PabrikController::class, 'store']);
    Route::get('/pabrik/edit/{pabrik}', [PabrikController::class, 'edit']);
    Route::post('/pabrik/update/{pabrik}', [PabrikController::class, 'update']);
    Route::delete('/pabrik/delete/{pabrik}', [PabrikController::class, 'destroy']);
});


