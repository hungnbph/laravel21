<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(15),
            'category_id' => $this->faker->numberBetween(1,10),
            'image_url' => $this->faker->imageUrl, 
            'description' =>$this->faker->text(200),
            'price' => $this->faker->numberBetween(10000, 20000),
            'sale_percent' => $this->faker->numberBetween(5000, 8000),
            'is_active' => $this->faker->numberBetween(0,1),
            
        ];
    }
}
