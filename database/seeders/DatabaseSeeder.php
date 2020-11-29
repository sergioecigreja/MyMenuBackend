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
        $this->call([
            RestaurantSeeder::class,
            MenuTypeSeeder::class,
            MenuSeeder::class,
            ProductSeeder::class
        ]);
    }
}
