<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requirement;

class RequirementController extends Controller
{
    public function show(string $id)
    {
      // $requirement = Requirement::find($id)->firstOrFail();
      // ,['requirement'=>$requirement]
      return view('phases.planning.elicitateView');
    }

}
