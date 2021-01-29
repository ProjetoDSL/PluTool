<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Phase;
use App\Models\Task;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $phases = Phase::all();
        $tasks = Task::all();

        $result = [];

        foreach ($tasks as $task) {
          $result[$phases[$task->phase_id-1]->description][$task->title] = $task->description;
        }

        $icons = [
          'planning' => 'layer-group',
          'design' => 'palette',
          'configuration' => 'cog',
          'execution' => 'play',
          'monitoring' => 'desktop',
          'analysis' => 'chart-pie',
          'reporting' => 'scroll',
        ];

        View::share([
          'activities' => $result,
          'sidebarIcons' => $icons
        ]);
    }
}
