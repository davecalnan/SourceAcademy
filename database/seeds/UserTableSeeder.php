<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

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
            'name' => 'DC Cahalane',
            'email' => 'dc@republicofwork.com',
            'password' => bcrypt('dcloveswordpress')
        ])->roles()->attach($client);

        User::create([
            'name' => 'Linda Wright',
            'email' => 'linda@republicofwork.com',
            'password' => bcrypt('lindaloveswordpress')
        ])->roles()->attach($client);

        User::create([
            'name' => 'Holly Breen',
            'email' => 'hollybreen@gmail.com',
            'password' => bcrypt('hollylovesshopify')
        ])->roles()->attach($client);

        User::create([
            'name' => 'Ciara Connelly',
            'email' => 'ciaraconnelly95@gmail.com',
            'password' => bcrypt('ciaraloveswordpress')
        ])->roles()->attach($sourceror);

        User::create([
            'name' => 'Seán Donnellan',
            'email' => 'sdonnellan14@gmail.com',
            'password' => bcrypt('seanloveswordpress')
        ])->roles()->attach($sourceror);

        User::create([
            'name' => 'Émer Hickey',
            'email' => 'emer.hickey@hotmail.com',
            'password' => bcrypt('emerloveswordpress')
        ])->roles()->attach($sourceror);

        User::create([
            'name' => 'Sinéad Roe',
            'email' => 'sineadmroe@hotmail.com',
            'password' => bcrypt('sineadloveswordpress')
        ])->roles()->attach($sourceror);

        User::create([
            'name' => 'Lev Udaltsov',
            'email' => 'leo.udaltsov@gmail.com',
            'password' => bcrypt('levloveswordpress')
        ])->roles()->attach($sourceror);

    	User::create([
            'name' => 'Patrick Fitzgerald',
            'email' => 'patrickfitzgerald97@gmail.com',
            'password' => bcrypt('patricklovesshopify')
        ])->roles()->attach($sourceror);

        User::create([
            'name' => 'Roisin Fox',
            'email' => 'roisin@ucceands.com',
            'password' => bcrypt('roisinlovesshopify')
        ])->roles()->attach($sourceror);

        User::create([
            'name' => 'Cian Hayes',
            'email' => 'hayes220@gmail.com',
            'password' => bcrypt('cianlovesshopify')
        ])->roles()->attach($sourceror);

        User::create([
            'name' => 'Jordan Morrison',
            'email' => 'jordanmorrison476@gmail.com',
            'password' => bcrypt('jordanlovesshopify')
        ])->roles()->attach($sourceror);

        User::create([
            'name' => 'Stephen O\' Sullivan',
            'email' => 'stephen.osullivan.cbccork@gmail.com',
            'password' => bcrypt('stephenlovesshopify')
        ])->roles()->attach($sourceror);

    }
}
