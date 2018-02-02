<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'description' => 'An admin user.',
        ]);

        Role::create([
            'name' => 'sourceror',
            'description' => 'A student freelancer.',
        ]);

        Role::create([
            'name' => 'client',
            'description' => 'A client user.',
        ]);
    }
}
