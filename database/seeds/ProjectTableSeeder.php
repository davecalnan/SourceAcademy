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

        $loveYourWork = new Project();
        $loveYourWork->name = 'LoveYourWork';
        $loveYourWork->slug = str_slug($loveYourWork->name);
        $loveYourWork->save();
        $loveYourWork->users()->attach($dave);
        $loveYourWork->resources()->attach($resource);

        $sellingPills = new Project();
        $sellingPills->name = 'Selling Pills';
        $sellingPills->slug = str_slug($sellingPills->name);
        $sellingPills->save();
        $sellingPills->users()->attach($dave);
        $sellingPills->resources()->attach($resource);
    }
}
