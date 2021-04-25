<?php

namespace App\ViewComposers;

use Illuminate\View\View;
use App\Models\Project;


class ProjectComposer {
  public function __construct()
  {
    $this->projects = Project::all();
  }

  public function compose(View $view)
  {
    $view->with([
      'projects' => $this->projects,
    ]);
  }
}
