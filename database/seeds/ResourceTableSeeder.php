<?php

use Illuminate\Database\Seeder;

class ResourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Resource::create([
        	'title' => 'Unsplash',
        	'content' => 'Unsplash is a collection of high-quality royalty-free images.',
        	'link' => 'https://unsplash.com'
        ]);
    }
}
