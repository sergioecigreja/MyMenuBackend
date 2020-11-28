<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuType;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        MenuType::create([
            'menu_type_name' => 'Entradas',
        ]);
        MenuType::create([
            'menu_type_name' => 'Bebidas',
        ]);
        MenuType::create([
            'menu_type_name' => 'Pratos de Carne',
        ]);
        MenuType::create([
            'menu_type_name' => 'Pratos de Peixe',
        ]);
        MenuType::create([
            'menu_type_name' => 'Sobremesas',
        ]);
    }
}
