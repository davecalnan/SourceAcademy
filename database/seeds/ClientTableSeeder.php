<?php

use App\Client;
use App\User;
use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', 'Padraic Vallely')->get();

        $client = Client::create([
            'name' => 'Cork Foundation',
            'slug' => 'corkfoundation'
        ])->users()->attach($user);
    }
}
