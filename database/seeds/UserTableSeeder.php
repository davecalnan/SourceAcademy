<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $admin = Role::where('name', 'admin')->first();
    	$sourceror = Role::where('name', 'sourceror')->first();
    	$client = Role::where('name', 'client')->first();

        User::create([
            'name' => 'Dave Calnan',
            'email' => 'd@ve.ie',
            'password' => bcrypt('secret')
        ])->roles()->attach($admin);

        User::create([
            'name' => 'Padraic Vallely',
            'email' => 'padraic.vallely@corkfoundation.com'
        ])->roles()->attach($client);
    }
}
