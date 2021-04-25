<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    \DB::table('tasks')->insert(
      [
        ['title' => 'P1.1', 'description' => 'Elicitate Performance Requirements', 'phase_id' => 1, 'created_at' => now()],
        ['title' => 'P1.2', 'description' => 'Analyze Performance Requirements', 'phase_id' => 1, 'created_at' => now()],
        ['title' => 'P1.3', 'description' => 'Specify Performance Requirements', 'phase_id' => 1, 'created_at' => now()],
        ['title' => 'P2.1', 'description' => 'Plan Test Design', 'phase_id' => 1, 'created_at' => now()],
        ['title' => 'P3.1', 'description' => 'Identify User Profiles', 'phase_id' => 1, 'created_at' => now()],
        ['title' => 'P3.2', 'description' => 'Identify Key Scenarios', 'phase_id' => 1, 'created_at' => now()],
        ['title' => 'P3.3', 'description' => 'Determine Distribution of User Activities', 'phase_id' => 1, 'created_at' => now()],
        ['title' => 'P4.1', 'description' => 'Identify the Test Environment', 'phase_id' => 1, 'created_at' => now()],
        ['title' => 'P6.1', 'description' => 'Choose Tool', 'phase_id' => 1, 'created_at' => now()],
        ['title' => 'P6.2', 'description' => 'Choose Method', 'phase_id' => 1, 'created_at' => now()],

        ['title' => 'D2.1', 'description' => 'Define Test Data', 'phase_id' => 2, 'created_at' => now()],
        ['title' => 'D2.2', 'description' => 'Implement Test Design', 'phase_id' => 2, 'created_at' => now()],
        ['title' => 'D3.1', 'description' => 'Plan and Design Workload', 'phase_id' => 2, 'created_at' => now()],
        ['title' => 'D5.1', 'description' => 'Establish Performance Metrics', 'phase_id' => 2, 'created_at' => now()],
        ['title' => 'D5.2', 'description' => 'Define Service Level Agreement', 'phase_id' => 2, 'created_at' => now()],

        ['title' => 'C3.1', 'description' => 'Configure Ramps', 'phase_id' => 3, 'created_at' => now()],
        ['title' => 'C4.1', 'description' => 'Prepare the Test Environment', 'phase_id' => 3, 'created_at' => now()],

        ['title' => 'E2.1', 'description' => 'Execute Performance Scenarios', 'phase_id' => 4, 'created_at' => now()],
        ['title' => 'E6.1', 'description' => 'Generate Workload', 'phase_id' => 4, 'created_at' => now()],
        ['title' => 'E7.1', 'description' => 'Collect Data', 'phase_id' => 4, 'created_at' => now()],

        ['title' => 'M2.1', 'description' => 'Monitor the Test', 'phase_id' => 5, 'created_at' => now()],
        ['title' => 'M4.1', 'description' => 'Monitor the Test Environment', 'phase_id' => 5, 'created_at' => now()],
        ['title' => 'M5.1', 'description' => 'Monitor the Performance Metrics', 'phase_id' => 5, 'created_at' => now()],

        ['title' => 'A1.1', 'description' => 'Validate Performance Requirements', 'phase_id' => 6, 'created_at' => now()],
        ['title' => 'A5.1', 'description' => 'Validate Service Level Agreement', 'phase_id' => 6, 'created_at' => now()],
        ['title' => 'A7.1', 'description' => 'Build Graphs and Chart', 'phase_id' => 6, 'created_at' => now()],
        ['title' => 'A7.2', 'description' => 'Analyze Results', 'phase_id' => 6, 'created_at' => now()],

        ['title' => 'R7.1', 'description' => 'Report results', 'phase_id' => 7, 'created_at' => now()],
      ]
    );
  }
}
