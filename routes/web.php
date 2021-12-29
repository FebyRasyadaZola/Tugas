<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\idnodeController;

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
    return view('dashboard');
});

Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('/waterlevel', [idnodeController::class, 'Air']);

Route::get('/temperature', [idnodeController::class, 'Suhu']);

Route::get('/humidity', [idnodeController::class, 'Kelembaban']);

Route::get('/Node1', [idnodeController::class, 'n1']);

Route::get('/Node2', [idnodeController::class, 'n2']);

Route::get('/Node3', [idnodeController::class, 'n3']);

Route::get('/Node4', [idnodeController::class, 'n4']);




