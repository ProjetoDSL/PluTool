<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requirement;

class PostController extends Controller
{
    public function create()
    {
      return view(
        'phases.planning.elicitateAdd',
        ['phase' => 'planning', 'task' => 'Add Requirement']
      );
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'description' => 'required|max:250',
      ]);
      
      $request->old(['description','contObg','cltExpec','featComp','usage']);

      $data = [
        'description' => request('description'), 
        'contObrigations' => request('contObg'),
        'cltExpectations' => request('cltExpec')
      ];
        
      Requirement::create($data);

      return redirect('app/planning/p1-1')->with('success', 'Sucesso');
    }
}
