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
      $validatedData = $request->validate([
        'description' => ['required', 'max:255'],
        'contObg' => ['required'],
        'cltExpec' => ['required'],
        'risk' => ['required'],
        'featComp' => ['required'],
        'business' => ['required'],
        'usage' => ['required']
      ]);
      $request->old(['description','contObg','cltExpec','featComp','usage']);
      $validator = Validator::make($request->all(), $validatedData);

      if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors());
        }

      return view('phases.planning.p1-1');
    }
}
