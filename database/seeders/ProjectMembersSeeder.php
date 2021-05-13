<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('projects_members')->insert(
            [
              ['project_id' => 1,'user_id'=> 1, 'permission'=> 1,'created_at' => now()],
              ['project_id' => 2,'user_id'=> 1, 'permission'=> 1,'created_at' => now()],
              ['project_id' => 3,'user_id'=> 2, 'permission'=> 1,'created_at' => now()],
              ['project_id' => 4,'user_id'=> 2, 'permission'=> 1,'created_at' => now()],
            ]
          );
    }
}
