<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_categories')->insert([
            ['category_name' => '理論化学'],
            ['category_name' => '有機化学'],
            ['category_name' => '無機化学'],
            ['category_name' => '高分子化合物'],
            ['category_name' => '生物有機物']
        ]);
    }
}
