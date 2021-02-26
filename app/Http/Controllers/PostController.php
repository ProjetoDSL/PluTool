<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('phases.planning.elicitateAdd');
    }

    public function store(Request $request)
    {
      // dd($request);
      $validatedData = $request->validate([
        'description' => 'required|max:250',
      ]);
      
      // $request->old(['description','contObg','cltExpec','featComp','usage']);
      // $validator = Validator::make($request->all(), $validatedData);

      // if ($validator->fails())
      //   {
      //     return redirect()->back()->withErrors($validator->errors());
      //   }

      return redirect('planning/p1-1')->with('success', 'Sucesso');
    }
}
