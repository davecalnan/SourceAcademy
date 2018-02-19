<?php

use App\Freelancer;
use Illuminate\Database\Seeder;

class FreelancerTableSeeder extends Seeder
{
    public function run()
    {
        Freelancer::create([
            'user_id' => 5,
            'title' => 'Wordpress Developer',
            'wordpress' => true
        ]);

        Freelancer::create([
            'user_id' => 6,
            'title' => 'Wordpress Developer',
            'wordpress' => true
        ]);

        Freelancer::create([
            'user_id' => 7,
            'title' => 'Wordpress Developer',
            'wordpress' => true
        ]);

        Freelancer::create([
            'user_id' => 8,
            'title' => 'Wordpress Developer',
            'wordpress' => true
        ]);

        Freelancer::create([
            'user_id' => 9,
            'title' => 'Web Developer',
            'shopify' => true,
            'wordpress' => true
        ]);

        Freelancer::create([
            'user_id' => 10,
            'title' => 'Shopify Developer',
            'shopify' => true
        ]);

        Freelancer::create([
            'user_id' => 11,
            'title' => 'Shopify Developer',
            'shopify' => true
        ]);

        Freelancer::create([
            'user_id' => 12,
            'title' => 'Shopify Developer',
            'shopify' => true
        ]);

        Freelancer::create([
            'user_id' => 13,
            'title' => 'Shopify Developer',
            'shopify' => true
        ]);

        Freelancer::create([
            'user_id' => 14,
            'title' => 'Shopify Developer',
            'shopify' => true
        ]);
    }
}
