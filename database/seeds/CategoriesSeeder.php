<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            "care",
            "razor",
            "acces"
        ];

        foreach ($names as $name) {
            $category = new Category();
            $category->name = $name;
            $category->save();
        }
    }
}
