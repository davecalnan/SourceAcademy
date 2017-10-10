<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'An admin user.';
        $role_admin->save();

    	$role_freelancer = new Role();
    	$role_freelancer->name = 'freelancer';
    	$role_freelancer->description = 'A freelancer user.';
    	$role_freelancer->save();

    	$role_client = new Role();
    	$role_client->name = 'client';
    	$role_client->description = 'A client user.';
    	$role_client->save();
    }
}
