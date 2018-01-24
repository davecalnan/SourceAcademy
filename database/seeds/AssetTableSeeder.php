<?php

use Illuminate\Database\Seeder;

class AssetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Asset::create([
        	'project_id' => '1',
        	'user_id' => '5',
        	'type' => 'wordpress_website',
        	'name' => 'Ciara\'s Site',
        	'description' => 'Description.',
        	'link' => 'http://lyw-cc.flywheelsites.com',
            'password' => 'loveyourwork'
        ]);

        App\Asset::create([
            'project_id' => '1',
            'user_id' => '6',
            'type' => 'wordpress_website',
            'name' => 'Seán\'s Site',
            'description' => 'Description.',
            'link' => 'http://lyw-sd.flywheelsites.com',
            'password' => 'loveyourwork'
        ]);

        App\Asset::create([
            'project_id' => '1',
            'user_id' => '7',
            'type' => 'wordpress_website',
            'name' => 'Émer\'s Site',
            'description' => 'Description.',
            'link' => 'http://lyw-eh.flywheelsites.com',
            'password' => 'loveyourwork'
        ]);

        App\Asset::create([
            'project_id' => '1',
            'user_id' => '8',
            'type' => 'wordpress_website',
            'name' => 'Sinéad\'s Site',
            'description' => 'Description.',
            'link' => 'http://lyw-sr.flywheelsites.com',
            'password' => 'loveyourwork'
        ]);

        App\Asset::create([
            'project_id' => '1',
            'user_id' => '9',
            'type' => 'wordpress_website',
            'name' => 'Lev\'s Site',
            'description' => 'Description.',
            'link' => 'http://lyw-lu.flywheelsites.com',
            'password' => 'loveyourwork'
        ]);

        App\Asset::create([
            'project_id' => '2',
            'user_id' => '10',
            'type' => 'shopify_website',
            'name' => 'Patrick\'s Site',
            'description' => 'Description.',
            'link' => 'https://pills-pf.myshopify.com',
            'password' => 'sellingpills'
        ]);

        App\Asset::create([
            'project_id' => '2',
            'user_id' => '11',
            'type' => 'shopify_website',
            'name' => 'Roisin\'s Site',
            'description' => 'Description.',
            'link' => 'https://pills-rf.myshopify.com',
            'password' => 'sellingpills'
        ]);

        App\Asset::create([
            'project_id' => '2',
            'user_id' => '12',
            'type' => 'shopify_website',
            'name' => 'Cian\'s Site',
            'description' => 'Description.',
            'link' => 'https://pills-ch.myshopify.com',
            'password' => 'sellingpills'
        ]);

        App\Asset::create([
            'project_id' => '2',
            'user_id' => '13',
            'type' => 'shopify_website',
            'name' => 'Jordan\'s Site',
            'description' => 'Description.',
            'link' => 'https://pills-jm.myshopify.com',
            'password' => 'sellingpills'
        ]);

        App\Asset::create([
            'project_id' => '2',
            'user_id' => '13',
            'type' => 'shopify_website',
            'name' => 'Jordan\'s Site #2',
            'description' => 'Description.',
            'link' => 'https://pills-jm2.myshopify.com',
            'password' => 'sellingpills'
        ]);

        App\Asset::create([
            'project_id' => '2',
            'user_id' => '13',
            'type' => 'shopify_website',
            'name' => 'Jordan\'s Site #3',
            'description' => 'Description.',
            'link' => 'https://pills-jm3.myshopify.com',
            'password' => 'sellingpills'
        ]);

        App\Asset::create([
            'project_id' => '2',
            'user_id' => '14',
            'type' => 'shopify_website',
            'name' => 'Stephen\'s Site',
            'description' => 'Description.',
            'link' => 'https://pills-sos.myshopify.com',
            'password' => 'sellingpills'
        ]);
    }
}
