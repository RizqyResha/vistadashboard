<?php

use App\Http\Controllers\Client\Auth\ClientLoginController;
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


Route::get('/', [ClientLoginController::class, 'getLogin'])->middleware('guest')->name('client.login');
Route::post('/', [ClientLoginController::class, 'postLogin'])->name('client.login.process');
Route::get('/logout', [ClientLoginController::class, 'logout'])->name('client.logout');
Route::group(['prefix' => '/client', 'middleware' => ['auth:client']], function () {
    Route::get('/dashboard', function () {
        return view('client/dashboard/index');
    })->name('client.dashboard');
    Route::get('/devices', function () {
        return view('client/devices/index');
    })->name('client.devices');
});


