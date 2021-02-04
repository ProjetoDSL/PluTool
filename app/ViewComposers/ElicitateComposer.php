<?php

namespace App\ViewComposers;

use Illuminate\View\View;
use App\Models\Requirement;


class ElicitateComposer {
  protected $activities, $icons;

  public function __construct()
  {
    $this->requirements = Requirement::all();
  }

  public function compose(View $view)
  {
    $view->with([
      'requirements' => $this->requirements,
    ]);
  }
}
