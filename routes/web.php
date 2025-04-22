<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\GoalCategoryController;

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

    //Asset Routes
    Route::resource('assets', AssetController::class);

    //Goal Routes
    Route::resource('goals', GoalController::class);
    Route::resource('goal-categories', GoalCategoryController::class);

});
