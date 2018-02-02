<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /** @test */
    public function a_user_can_view_their_project()
    {
        $user = App\User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => $faker->password
        ]);

        $project = App\Project::create([
            'name' => $faker->title,
            'slug' => $faker->slug,
            'type' => $faker->slug
        ]);

        $project->users()->attach($user);

        $response = $this->actionAs($user)
                         ->get('/projects/' . $project->slug);

        $response->assertStatus(200);
    }
}
