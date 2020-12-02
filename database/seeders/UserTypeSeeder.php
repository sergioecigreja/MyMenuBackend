<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new UserType(['user_type_name' => 'admin']);
        $restaurant_owner = new UserType(['user_type_name' => 'restaurant_owner']);
        $restaurant_client = new UserType(['user_type_name' => 'restaurant_client']);

        $admin->save();
        $restaurant_owner->save();
        $restaurant_client->save();
    }
}
