<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phase;

class PhaseController extends Controller
{
    public function show(string $description)
    {
      return view('phases.'.Phase::where('description', $description)->firstOrFail()->description.'.home');
    }

}
