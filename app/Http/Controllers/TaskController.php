<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phase;
use App\Models\Task;

class TaskController extends Controller
{
    public function show(string $phase, string $task)
    {
      $phase = Phase::where('description', $phase)->firstOrFail();
      $task = Task::where('title', strtoupper(str_replace("-", ".", $task)))
        ->where('phase_id', $phase->id)
        ->firstOrFail()
        ->title;

      return view('phases.'
        .$phase->description.'.'
        .strtolower(str_replace(".", "-", $task))
      );
    }
}
