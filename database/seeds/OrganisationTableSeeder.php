<?php

use App\Organisation;
use App\User;
use Illuminate\Database\Seeder;

class OrganisationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', 'Padraic Vallely')->get();

        $organisation = Organisation::create([
            'name' => 'Cork Foundation',
            'slug' => 'corkfoundation'
        ])->users()->attach($user);
    }
}
