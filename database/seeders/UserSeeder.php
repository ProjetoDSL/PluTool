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
        $email = 'plutooladmin@lesse.com.br';
        $user = DB::table('users')->where('email', '=', $email)->first();
        if (empty($user)) {
            DB::table('users')->insert([
                'name' => 'Administrador',
                'email' => $email,
                'password' => Hash::make('123mudar*'),
            ]);
        }
    }
}
