<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Physics',
            ],
            [
                'id' => 2,
                'name' => 'Mathematics',
            ],
            [
                'id' => 3,
                'name' => 'Computing',
            ],
            [
                'id' => 4,
                'name' => 'University Course',
            ],
        ]);
    }
}
