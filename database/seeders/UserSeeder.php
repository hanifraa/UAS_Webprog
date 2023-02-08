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
        User::create(
            [
                'role_id' => 1,
                'gender_id' => 1,
                'first_name' => 'Admin',
                'last_name' => 'Last Name',
                'display_picture_link' => 'default.jpg',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password123')
            ]
        );

        User::create(
            [
                'role_id' => 2,
                'gender_id' => 2,
                'first_name' => 'User',
                'last_name' => 'Last User',
                'display_picture_link' => 'default.jpg',
                'email' => 'user@gmail.com',
                'password' => Hash::make('password123')
            ]
        );
    }
}
