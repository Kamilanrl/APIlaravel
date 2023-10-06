<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Models\Peminjaman;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/buku')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::get('/{id}',[BukuController::class,'show']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('{id}/update',[BukuController::class,'update']);
    Route::delete('{id}/delete',[BukuController::class,'destroy']);
});

Route::prefix('/anggota')->group(function(){
    Route::get('/',[AnggotaController::class,'index']);
    Route::get('/{id}',[AnggotaController::class,'show']);
    Route::post('/create',[AnggotaController::class,'create']);
    Route::put('{id}/update',[AnggotaController::class,'update']);
    Route::delete('{id}/delete',[AnggotaController::class,'delete']);
});

Route::prefix('/peminjaman')->group(function(){
    Route::get('/',[PeminjamanController::class,'index']);
    Route::get('/{id}',[PeminjamanController::class,'show']);
    Route::post('/create',[PeminjamanController::class,'create']);
    Route::put('{id}/update',[PeminjamanController::class,'update']);
    Route::delete('{id}/delete',[PeminjamanController::class,'destroy']);
});

Route::prefix('/pengembalian')->group(function(){
    Route::get('/',[PengembalianController::class,'index']);
    Route::get('/{id}',[PengembalianController::class,'show']);
    Route::post('/create',[PengembalianController::class,'create']);
    Route::put('{id}/update',[PengembalianController::class,'update']);
    Route::delete('{id}/delete',[PengembalianController::class,'destroy']);
});



