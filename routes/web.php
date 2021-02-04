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

Route::get('/', function () {
    return view('layout.app');
});

Route::get('/{phase}', [PhaseController::class, 'show']);

Route::get('/{phase}/{task}', [TaskController::class, 'show']);

Route::get('/{phase}/elicitateView/{id}', [RequirementController::class, 'show']);
// function ($phase, $task) {

//   // $_task = strtoupper(str_replace("-", ".", $task));

//   // if(! array_key_exists($phase, $activities)){
//   //   abort(404);
//   // }
//   // if(! array_key_exists($_task, $activities[$phase])) {
//   //   abort(404);
//   // };

//   return view('phases.'.$phase.'.'.$task);
// });
