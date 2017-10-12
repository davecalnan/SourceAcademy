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
        	'title' => 'Resource',
        	'content' => 'Content goes here',
        	'link' => 'https://google.ie'
        ]);
    }
}
