<?php

namespace Database\Factories;

use App\Models\MenuType;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MenuType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $examples = [
            'Entradas',
            'Bebidas',
            'Pratos de Carne',
            'Pratos de Peixe',
            'Sobremesas'
        ];

        return [
            'menu_type_name' => $this->faker->unique()->randomElement($examples),
        ];
    }
}
