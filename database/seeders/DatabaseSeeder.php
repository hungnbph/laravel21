<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Category_Product;
use App\models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Product::factory(10)->create();
        Comment::factory(10)->create();
        Category::factory(10)->create();
        Category_Product::factory(10)->create();
    }
}
