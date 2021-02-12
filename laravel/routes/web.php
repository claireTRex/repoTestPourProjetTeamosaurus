<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\UsersControllers;
 use App\Http\Controllers\AuthController;
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

Route::get('/', [UsersControllers::class,'create'])->name('createUser');
Route::post('/storeuser', [UsersControllers::class,'storeuser'])->name('storeUser');



include "groupes/auth.php";


