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
    return view('welcome');
});

Route::get('/login', function () {
  return view('login');
});

Route::get('/app', function () {
  return view('home');
});

Route::get('/app/{phase}/', [PhaseController::class, 'show']);

Route::post('/app/{phase}/elicitateAdd', [PostController::class, 'store']);

Route::get('/app/{phase}/elicitateAdd', [PostController::class, 'create']);

Route::get('/app/{phase}/{task}', [TaskController::class, 'show']);

Route::get('/app/{phase}/elicitateView/{id}', [RequirementController::class, 'show']);


require __DIR__.'/auth.php';
