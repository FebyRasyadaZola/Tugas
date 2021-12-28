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

Route::get('/', [idnodeController::class, 'idnodeController']);

Route::get('/', function () {
    return view('dashboard');
});

Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('waterlevel', function () {
    return view('waterlevel');
});

Route::get('temperature', function () {
    return view('temperature');
});

Route::get('humidity', function () {
    return view('humidity');
});

Route::get('Node1', function () {
    return view('Node1');
});

Route::get('Node2', function () {
    return view('Node2');
});

Route::get('Node3', function () {
    return view('Node3');
});

Route::get('Node4', function () {
    return view('Node4');
});

