<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Menu;

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
            'product_name' => $this->faker->sentence(3, true),
            'product_description' => $this->faker->sentence(10, true),
            'product_price' => $this->faker->randomFloat(2, 1, 30),
            'menu_id' => Menu::all()->random()->menu_id
        ];
    }
}
