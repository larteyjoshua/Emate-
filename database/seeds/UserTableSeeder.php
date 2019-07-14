<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Administrator',
                'email' => 'admin@emate.org',
                'password' => bcrypt('admin'),
                'is_admin' => true,
                'reg_num' => 'ADMINISTRATOR',
                'type' => true,
            ],
        ]);
    }
}
