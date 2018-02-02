<?php

use App\Client;
use App\Project;
use App\User;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dave = User::where('name', 'Dave Calnan')->first();
        $padraic = User::where('name', 'Padraic Vallely')->first();

        $client = Client::where('name', 'Cork Foundation')->first();

        $project = Project::create([
            'client_id' => $client->id,
            'name' => 'Cork Foundation Website',
            'slug' => str_slug('Cork Foundation Website'),
            'type' => 'wordpress_basic'
        ]);
        
        $project->users()->attach([1,2]);
    }
}
