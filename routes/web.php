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

Route::get('/app/{project}/{phase}/', [PhaseController::class, 'show']);

Route::post('/app/{phase}/requirement/new', [RequirementController::class, 'create']);

Route::get('/app/{phase}/requirement/new', [RequirementController::class, 'createView']);

Route::get('/app/{phase}/requirement/remove/{id}', [RequirementController::class, 'remove']);

Route::post('/app/{phase}/requirement/update/{id}', [RequirementController::class, 'update']);

Route::get('/app/{phase}/requirement/update/{id}', [RequirementController::class, 'updateView']);

Route::get('/app/{phase}/requirement/view/{id}', [RequirementController::class, 'view']);

Route::get('/app/{project}/{phase}/{task}', [TaskController::class, 'show']);



require __DIR__.'/auth.php';
