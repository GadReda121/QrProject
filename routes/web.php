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
    Route::get('/', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('edit', 'edit')->name('edit');
    Route::put('update/{id_number}', 'update')->name('update');
    Route::get('qr/{user}', 'showQr')->name('showQr');
    Route::get('/{user}', 'show')->name('show');
});
