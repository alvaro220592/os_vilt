<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(StateSeeder::class);
        // $this->call(CitySeeder::class);
        // $this->call(AddressSeeder::class);
        // $this->call(PersonSeeder::class);
        // $this->call(ClientSeeder::class);
        // $this->call(SupplierSeeder::class);
        $this->call(PhoneSeeder::class);
        $this->call(EmailSeeder::class);

        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
