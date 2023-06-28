<?php

namespace Database\Seeders;

use App\Models\Email;
use App\Models\Person;
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
        $people = Person::all();

        foreach ($people as $person) {
            Email::factory()->create([
                'person_id' => $person->id
            ]);
        }
    }
}
