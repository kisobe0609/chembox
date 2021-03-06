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
            ['name' => 'ゲスト', 'email' => 'guest@gmail.com', 'password' => 'guest'],
            ['name' => 'Kotaro', 'email' => 'kotaro@gmail.com', 'password' => bcrypt('testtest')]
        ]);
    }
}
