<?php

namespace App\ViewComposers;

use Illuminate\View\View;
use App\Models\Phase;
use App\Models\Task;


class AppComposer {
  protected $activities, $icons;

  public function __construct()
  {
    $phases = Phase::all();
    $tasks = Task::all();

    $result = [];

    foreach ($tasks as $task) {
      $result[$phases[$task->phase_id-1]->description][$task->title] = $task->description;
    }

    $this->activities = $result;

    $this->icons = [
      'planning' => 'layer-group',
      'design' => 'palette',
      'configuration' => 'cog',
      'execution' => 'play',
      'monitoring' => 'desktop',
      'analysis' => 'chart-pie',
      'reporting' => 'scroll',
    ];
  }

  public function compose(View $view)
  {
    $view->with([
      'activities' => $this->activities,
      'icons' => $this->icons
    ]);
  }
}
