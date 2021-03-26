<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requirement;

class RequirementController extends Controller
{
    public function show(string $phase,string $id)
    {
      $requirement = Requirement::where('id', $id)->firstOrFail();
      return view(
        'phases.planning.elicitateView',
        ['phase' => 'planning', 'task' => 'View Requirement', 'requirement'=>$requirement]
      );
    }

}
