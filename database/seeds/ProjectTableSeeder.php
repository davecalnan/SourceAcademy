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
        $dave = User::first();
        $resource = Resource::first();

        $loveYourWork = Project::create([
            'name' => 'LoveYourWork',
            'slug' => str_slug('LoveYourWork')
        ]);
        $loveYourWork->users()->attach([1,3,4,5,6,7]);
        $loveYourWork->resources()->attach($resource);

        $honestRoots = Project::create([
            'name' => 'Honest Roots',
            'slug' => str_slug('Honest Roots')
        ]);
        $honestRoots->users()->attach([1,2,8,9,10,11,12]);
        $honestRoots->resources()->attach($resource);
    }
}
