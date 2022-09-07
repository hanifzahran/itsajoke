<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Database\Factories\CategoryFactory;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'Root',
            'description' => 'Category root (parent) jangan dihapus',
            'parent_id' => null,
            'menu' => 0,
        ]);
        //factory('App\Models\Category', 10)->create();
    }
}
