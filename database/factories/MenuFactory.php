<?php

namespace Database\Factories;

use App\Models\Menu;
use App\MOdels\MenuType;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'menu_type_id' => $this->faker->randomElement(MenuType::all())->menu_type_id,
            'restaurant_id' => $this->faker->randomElement(Restaurant::all())->restaurant_id
        ];
    }
}
