<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\GoalController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Route fitur asset
    Route::resource('assets', AssetController::class);
    Route::get('/asset', [AssetController::class, 'index'])->name('asset.index');
    Route::get('/coba-harga/{symbol}', [AssetController::class, 'getStockPrice']);
    Route::get('/crypto-harga/{coinId}', [AssetController::class, 'getCryptoPrice']);

    //Route fitur goals
    Route::get('/goals', [GoalController::class, 'index'])->name('goals.index');


});
