<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuType;

class MenuTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuType::factory()->times(5)->create();
    }
}
