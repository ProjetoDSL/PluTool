<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('phases')->insert(
        [
          ['description' => 'planning', 'created_at' => now()],
          ['description' => 'design', 'created_at' => now()],
          ['description' => 'configuration', 'created_at' => now()],
          ['description' => 'execution', 'created_at' => now()],
          ['description' => 'monitoring', 'created_at' => now()],
          ['description' => 'analysis', 'created_at' => now()],
          ['description' => 'reporting', 'created_at' => now()]
        ]
      );

    }
}
