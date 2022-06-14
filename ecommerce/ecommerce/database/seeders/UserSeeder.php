<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'adm@adm.com',
            'password' => bcrypt("abcde123"),
            'role' => 'Administrador'
        ]);

        DB::table('users')->insert([
            'name' => 'Thais',
            'email' => 'thais@gmail.com',
            'password' => Hash::make("abcde123"),
            'role' => 'cliente'
        ]);
    }
}
