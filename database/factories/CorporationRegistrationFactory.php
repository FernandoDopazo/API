<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CorporationRegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid,
            'office' => $this->faker->randomElement(['boss', 'employee']),
            'function' => $this->faker->randomElement(['manage_business', 'consult_client']),
            'type_of_technology' => $this->faker->word,
            'company' => $this->faker->company,
            'modality' => $this->faker->randomElement(['clt', 'pj']),
            'wage' => $this->faker->randomFloat(2, 1000, 10000), // Adjust the range as needed
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
