<?php

namespace Database\Seeders;

use App\Models\Email;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = Client::all();

        foreach ($clients as $client) {
            Email::factory()->create([
                'client_id' => $client->id
            ]);
        }
    }
}
