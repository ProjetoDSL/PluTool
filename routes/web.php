<?php

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

use App\Http\Controllers\PhaseController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('layout.app');
});

Route::get('/{phase}', [PhaseController::class, 'show']);

Route::post('/{phase}/elicitateAdd', [PostController::class, 'store']);

Route::get('/{phase}/elicitateAdd', [PostController::class, 'create']);

Route::get('/{phase}/{task}', [TaskController::class, 'show']);

Route::get('/{phase}/elicitateView/{id}', [RequirementController::class, 'show']);
