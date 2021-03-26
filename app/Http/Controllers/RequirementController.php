<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requirement;

class RequirementController extends Controller
{
    public function view(string $phase,string $id)
    {
      $requirement = Requirement::where('id', $id)->firstOrFail();
      return view(
        'phases.planning.elicitateView',
        ['phase' => 'planning', 'task' => 'View Requirement', 'requirement'=>$requirement]
      );
    }

    public function createView()
    {
      return view(
        'phases.planning.elicitateAdd',
        ['phase' => 'planning', 'task' => 'Add Requirement']
      );
    }

    public function updateView(string $phase,string $id)
    {
      $requirement = Requirement::where('id', $id)->firstOrFail();
      return view(
        'phases.planning.elicitateUpdate',
        ['phase' => 'planning', 'task' => 'Update Requirement', 'requirement'=>$requirement]
      );
    }

    public function create(Request $request)
    {
      $validatedData = $request->validate([
        'description' => 'required|max:250',
      ]);
      
      $request->old(1,['description','contObg','cltExpec','featComp','usage']);

      $data = [
        'description' => request('description'), 
        'contObrigations' => request('contObg'),
        'cltExpectations' => request('cltExpec')
      ];
        
      Requirement::create($data);

      return redirect('app/planning/p1-1')->with('success', __('returns.addSuccess'));
    }

    public function update(Request $request, string $phase, string $id)
    {
      $validatedData = $request->validate([
        'description' => 'required|max:250',
      ]);
      
      $request->old(1,['description','contObg','cltExpec','featComp','usage']);

      $requirement = Requirement::find($id);
      $requirement->description = $request->description;
      $requirement->contObrigations = $request->contObg;
      $requirement->cltExpectations = $request->cltExpec;
      $requirement->save();

      return redirect('app/planning/p1-1')->with('success', __('returns.updateSuccess'));
    }

    public function remove(Request $request, string $phase, string $id)
    {
      $requirement = Requirement::find($id);
      $requirement->delete();

      return redirect('app/planning/p1-1')->with('success', __('returns.removeSuccess'));
    }

}
