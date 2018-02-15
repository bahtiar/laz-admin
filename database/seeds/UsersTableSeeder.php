<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'username' => 'admin',
            'initial' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'level' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Agen',
            'username' => 'agen',
            'initial' => 'agen',
            'email' => 'agen@gmail.com',
            'password' => bcrypt('secret'),
            'level' => 'agen',
        ]);
    }
}
