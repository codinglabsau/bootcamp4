<?php

use Illuminate\Database\Seeder;

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
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => Hash::make('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
