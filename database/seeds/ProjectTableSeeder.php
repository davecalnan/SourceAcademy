<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\Resource;
use App\User;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dave = User::where('email', 'd@ve.ie')->first();
        $unsplash = Resource::where('title', 'Unsplash')->first();

        $loveYourWork = Project::create([
            'name' => 'LoveYourWork',
            'slug' => str_slug('LoveYourWork'),
            'type' => 'wordpress_basic'
        ]);
        $loveYourWork->users()->attach([1,2,3,5,6,7,8,9]);
        $loveYourWork->resources()->attach($unsplash);

        $honestRoots = Project::create([
            'name' => 'Honest Roots',
            'slug' => str_slug('Honest Roots'),
            'type' => 'shopify_basic'
        ]);
        $honestRoots->users()->attach([1,4,10,11,12,13,14]);
        $honestRoots->resources()->attach($unsplash);
    }
}
