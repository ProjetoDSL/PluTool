<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(
            [
              ['name' => 'Igor','email'=> 'igordalepiane@gmail.com', 'password'=> '12345678','created_at' => now()],
              ['name' => 'Lucas','email'=> 'lucas@gmail.com', 'password'=> '12345678','created_at' => now()],
              
            ]
          );
    }
}
