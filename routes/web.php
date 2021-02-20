<?php

use App\Http\Controllers\User\InputController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:user', 'prefix' => 'user', 'as' => 'user.'], function() {
        Route::get('/inputs/{filepath}/download', [InputController::class, 'download'])->name('inputs.download');
        Route::resource('inputs', App\Http\Controllers\User\InputController::class);
    });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('validate', \App\Http\Controllers\Admin\ValidationController::class);
    });
});


