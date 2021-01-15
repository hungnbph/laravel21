<?php

namespace Database\Factories;

use App\Models\Category_Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class Category_ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category_Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 10),
            'product_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
