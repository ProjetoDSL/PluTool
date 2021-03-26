<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phase;

class PhaseController extends Controller
{
    public function show(string $description)
    {
      $phase = Phase::where('description', $description)->firstOrFail()->description;
      return view(
      'phases.home',
        ['phase' => $phase]
      );
    }

}
