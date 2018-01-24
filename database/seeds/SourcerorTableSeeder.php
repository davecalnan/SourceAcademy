<?php

use Illuminate\Database\Seeder;
use App\Sourceror;

class SourcerorTableSeeder extends Seeder
{
    public function run()
    {
        Sourceror::create([
            'user_id' => 5,
            'title' => 'Wordpress Developer',
            'wordpress' => true
        ]);

        Sourceror::create([
            'user_id' => 6,
            'title' => 'Wordpress Developer',
            'wordpress' => true
        ]);

        Sourceror::create([
            'user_id' => 7,
            'title' => 'Wordpress Developer',
            'wordpress' => true
        ]);

        Sourceror::create([
            'user_id' => 8,
            'title' => 'Wordpress Developer',
            'wordpress' => true
        ]);

        Sourceror::create([
            'user_id' => 9,
            'title' => 'Web Developer',
            'shopify' => true,
            'wordpress' => true
        ]);

        Sourceror::create([
            'user_id' => 10,
            'title' => 'Shopify Developer',
            'shopify' => true
        ]);

        Sourceror::create([
            'user_id' => 11,
            'title' => 'Shopify Developer',
            'shopify' => true
        ]);

        Sourceror::create([
            'user_id' => 12,
            'title' => 'Shopify Developer',
            'shopify' => true
        ]);

        Sourceror::create([
            'user_id' => 13,
            'title' => 'Shopify Developer',
            'shopify' => true
        ]);

        Sourceror::create([
            'user_id' => 14,
            'title' => 'Shopify Developer',
            'shopify' => true
        ]);
    }
}
