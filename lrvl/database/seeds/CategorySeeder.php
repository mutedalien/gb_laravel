<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                "title" => "Спорт",
                "slug" => "sport"
            ],
            [
                "title" => "Политика",
                "slug" => "politics"
            ],
        ];

        DB::table('categories')->insert($category);
    }
}
