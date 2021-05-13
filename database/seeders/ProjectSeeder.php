<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('projects')->insert(
            [
              ['title' => 'Projeto 1','description'=> 'Teste', 'objectives'=> 'Teste','created_at' => now()],
              ['title' => 'Projeto 2','description'=> 'Teste', 'objectives'=> 'Teste','created_at' => now()],
              ['title' => 'Projeto 3','description'=> 'Teste', 'objectives'=> 'Teste','created_at' => now()],
              ['title' => 'Projeto 4','description'=> 'Teste', 'objectives'=> 'Teste','created_at' => now()],
            ]
          );
    }
}
