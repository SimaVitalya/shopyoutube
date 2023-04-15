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
                [
                    'name' => 'Администратор',
                    'email' => 'admin@example.com',
                    'password' => bcrypt('admin'),
                    'is_admin' => 1
                ],
                [
                    'name' => 'Виталий',
                    'email' => 'simachev27@gmail.com',
                    'password' => bcrypt('simachev27@gmail.com'),
                    'is_admin' => 1
                ], [
                    'name' => 'Виталий',
                    'email' => 'USER27@gmail.com',
                    'password' => bcrypt('USER27@gmail.com'),
                    'is_admin' => 0
                ]
            ]


        );
    }
}
