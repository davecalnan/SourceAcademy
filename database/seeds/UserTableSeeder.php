<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $admin = Role::where('name', 'admin')->first();
    	$freelancer = Role::where('name', 'freelancer')->first();
    	$client = Role::where('name', 'client')->first();

        User::create([
            'name' => 'Dave Calnan',
            'email' => 'd@ve.ie',
            'password' => bcrypt('secret')
        ])->roles()->attach($admin);

        User::create([
            'name' => 'Holly Breen',
            'email' => 'hollybreen@gmail.com',
            'password' => bcrypt('hollylovesshopify')
        ])->roles()->attach($client);

        User::create([
            'name' => 'Ciara Connelly',
            'email' => 'ciaraconnelly95@gmail.com',
            'password' => bcrypt('ciaraloveswordpress')
        ])->roles()->attach($freelancer);

        User::create([
            'name' => 'Seán Donnellan',
            'email' => 'sdonnellan14@gmail.com',
            'password' => bcrypt('seanloveswordpress')
        ])->roles()->attach($freelancer);

        User::create([
            'name' => 'Émer Hickey',
            'email' => 'emer.hickey@hotmail.com',
            'password' => bcrypt('emerloveswordpress')
        ])->roles()->attach($freelancer);

        User::create([
            'name' => 'Sinéad Roe',
            'email' => 'sineadmroe@hotmail.com',
            'password' => bcrypt('sineadloveswordpress')
        ])->roles()->attach($freelancer);

        User::create([
            'name' => 'Lev Udaltsov',
            'email' => 'leo.udaltsov@gmail.com',
            'password' => bcrypt('levloveswordpress')
        ])->roles()->attach($freelancer);

    	User::create([
            'name' => 'Patrick Fitzgerald',
            'email' => 'patrickfitzgerald97@gmail.com',
            'password' => bcrypt('patricklovesshopify')
        ])->roles()->attach($freelancer);

        User::create([
            'name' => 'Roisin Fox',
            'email' => 'roisin@ucceands.com',
            'password' => bcrypt('roisinlovesshopify')
        ])->roles()->attach($freelancer);

        User::create([
            'name' => 'Cian Hayes',
            'email' => 'hayes220@gmail.com',
            'password' => bcrypt('cianlovesshopify')
        ])->roles()->attach($freelancer);

        User::create([
            'name' => 'Jordan Morrison',
            'email' => 'jordanmorrison476@gmail.com',
            'password' => bcrypt('jordanlovesshopify')
        ])->roles()->attach($freelancer);

        User::create([
            'name' => 'Stephen O\' Sullivan',
            'email' => 'stephen.osullivan.cbccork@gmail.com',
            'password' => bcrypt('stephenlovesshopify')
        ])->roles()->attach($freelancer);

    }
}
