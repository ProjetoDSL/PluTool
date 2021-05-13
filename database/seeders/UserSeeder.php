<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeders.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert(
      [
        ['name' => 'Administrador','email' => 'plutool@lesse.com.br','password' => Hash::make('123mudar*'),'created_at' => now()],
        ['name' => 'Igor','email'=> 'igordalepiane@gmail.com', 'password'=> '12345678','created_at' => now()],
        ['name' => 'Lucas','email'=> 'lucas@gmail.com', 'password'=> '12345678','created_at' => now()],
      ]
    );
  }
}
