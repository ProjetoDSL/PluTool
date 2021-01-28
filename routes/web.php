<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout.app');
});

Route::get('/{phase}/{task}', function ($phase, $task) {
  $activities = [
    'planning' => [
      'P1.1' => 'Elicitate Performance Requirements',
      'P1.2' => 'Analyze Performance Requirements',
      'P1.3' => 'Specify Performance Requirements',
      'P3.1' => 'Identify User Profiles',
      'P3.2' => 'Identify Key Scenarios',
      'P3.3' => 'Determine Distribution of User Activities',
      'P2.1' => 'Plan Test Design',
      'P4.1' => 'Identify the Test Environment',
      'P6.1' => 'Choose Tool',
      'P6.2' => 'Choose Method',
    ],
    'design' => [
      'D5.1' => 'Establish Performance Metrics',
      'D5.2' => 'Define Service Level Agreement',
      'D2.1' => 'Define Test Data',
      'D2.2' => 'Implement Test Design',
      'D3.1' => 'Plan and Design Workload',
    ],
    'configuration' => [
      'C3.1' => 'Configure Ramps',
      'C4.1' => 'Prepare the Test Environment',
    ],
    'execution' => [
      'E2.1' => 'Execute Performance Scenarios',
      'E6.1' => 'Generate Workload',
      'E7.1' => 'Collect Data',
    ],
    'monitoring' => [
      'M2.1' => 'Monitor the Test',
      'M4.1' => 'Monitor the Test Environment',
      'M5.1' => 'Monitor the Performance Metrics',
    ],
    'analysis' => [
      'A1.1' => 'Validate Requirements',
      'A7.2' => 'Analyze Results',
      'A5.1' => 'Validate Service Level Agreement',
      'A7.1' => 'Build Graphs and Charts'
    ],
    'reporting' => [
      'R7.1' => 'Report Results',
    ],
  ];

  $icons = [
    'planning' => 'layer-group',
    'design' => 'palette',
    'configuration' => 'cog',
    'execution' => 'play',
    'monitoring' => 'desktop',
    'analysis' => 'chart-pie',
    'reporting' => 'scroll',
  ];

  $_task = strtoupper(str_replace("-", ".", $task));

  if(! array_key_exists($phase, $activities)){
    abort(404);
  }
  if(! array_key_exists($_task, $activities[$phase])) {
    abort(404);
  };

  return view($phase.'.'.$task, [
    'activities' => $activities,
    'icons' => $icons
  ]);
});
