<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->firstname() . " " . fake()->lastname(),
            'cpf_cnpj' => fake()->numberBetween(10000000000, 99999999999),
            'num_endereco' => fake()->numberBetween(10, 999),
            'address_id' => Address::all()->pluck('id')->random()
        ];
    }
}
