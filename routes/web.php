<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\DashboardAlumniController;
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
    return view('welcome');
});

Route::get('/alumni', [AlumniController::class, 'index']);
Route::get('/alumni/create', [AlumniController::class, 'create']);
Route::post('/alumni', [AlumniController::class, 'store']);

Route::get('/dashboard/alumni', [DashboardAlumniController::class, 'alumni']);
Route::resource('/dashboard', DashboardAlumniController::class);