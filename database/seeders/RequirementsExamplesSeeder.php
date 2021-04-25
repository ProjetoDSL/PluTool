<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequirementsExamplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('requirements')->insert(
          [
            ['description' => 'Description',
              'contObrigations' => 'Obrigations, obrigations, obrigations',
              'cltExpectations' => 'There are the expectations',
              'project_id' => 1,
              'created_at' => now()],
            ['description' => 'Requirement description test',
              'contObrigations' => 'Requirement obrigations go here',
              'cltExpectations' => 'So much expectations for this requirement',
              'project_id' => 1,
              'created_at' => now()],
            ['description' => 'One requirement description',
              'contObrigations' => 'Contract obrigations, contract, contract',
              'cltExpectations' => 'Expectations expectations expectations',
              'project_id' => 1,
              'created_at' => now()],
          ]);
    }
}
