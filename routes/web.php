<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInfoController;

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

Route::post('/', [UserInfoController::class, 'store']);

Route::get('/', [UserInfoController::class, 'show']);

Route::get('edit/{id}', [UserInfoController::class, 'edit']);

Route::put('update/{id}',[UserInfoController::class, 'update']);

Route::get('delete/{id}',[UserInfoController::class, 'destroy']);