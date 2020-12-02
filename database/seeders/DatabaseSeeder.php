<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuType;
use App\Models\UserType;

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
            UserTypeSeeder::class,
            UserSeeder::class,
            RestaurantSeeder::class,
            MenuTypeSeeder::class,
            MenuSeeder::class,
            ProductSeeder::class
        ]);
    }
}
