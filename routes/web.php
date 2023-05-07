<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(UserController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    // Route::post('/', 'store')->name('store');
    Route::get('create', 'create')->name('create')->middleware(['prevent.back']);
    Route::post('store', 'store')->name('store');
    Route::get('qr/{user}', 'showQr')->name('showQr');
    Route::get('/{user}', 'show')->name('show');
});
