<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
    	$role_freelancer = Role::where('name', 'freelancer')->first();
    	$role_client = Role::where('name', 'client')->first();

    	$freelancer = new User();
    	$freelancer->name = 'Freelancer Name';
    	$freelancer->email = 'freelancer@example.com';
    	$freelancer->password = bcrypt('secret');
    	$freelancer->save();
    	$freelancer->roles()->attach($role_freelancer);

    	$client = new User();
    	$client->name = 'Client Name';
    	$client->email = 'client@example.com';
    	$client->password = bcrypt('secret');
    	$client->save();
    	$client->roles()->attach($role_client);
    }
}
