<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'role_id' => 1,
            'email' => 'admin@example.com',
            'username' => 'superadmin',
            'status' => 'active',
            'image_url' => 'default.jpg',
            'last_login' => date("Y-m-d H:i:s"),
            'password' => Hash::make('secret')
        ]);
        User::create([
            'name' => 'Admin 1',
            'role_id' => 2,
            'email' => 'admin1@example.com',
            'username' => 'admin1',
            'status' => 'active',
            'image_url' => 'default.jpg',
            'last_login' => date("Y-m-d H:i:s"),
            'password' => Hash::make('secret')
        ]);
        User::create([
            'name' => 'Admin 2',
            'role_id' => 3,
            'email' => 'admin2@example.com',
            'username' => 'admin2',
            'status' => 'active',
            'image_url' => 'default.jpg',
            'last_login' => date("Y-m-d H:i:s"),
            'password' => Hash::make('secret')
        ]);
    }
}
