<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function ()
{
    Route::get('', [AuthController::class,'logUser'])->name('logeUser');

    Route::post('/login', [AuthController::class,'loginUser'])->name('loginUser');

    Route::get('/space', [AuthController::class,'spaceUser'])->name('space');
});
