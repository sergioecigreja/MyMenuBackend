<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //testing purposes..
        $root = new User([
            'user_name' => 'root',
            'user_email' => 'root@root.com',
            'user_password' => Hash::make('root'),
            'user_type_id' => 1
            ]);

        $root -> save();
        User::factory()->times(40)->create();
    }
}
