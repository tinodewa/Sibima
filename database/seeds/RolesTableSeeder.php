<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Super Admin'
        ]);

        Role::create([
            'name' => 'Admin 1'
        ]);

        Role::create([
            'name' => 'Admin 2'
        ]);
    }
}
