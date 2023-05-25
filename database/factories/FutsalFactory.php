<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Futsal>
 */
class FutsalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'product-'.$this->faker->numberBetween(1,10).'.jpg',
            'address' => $this->faker->address(),
            'price' => $this->faker->numberBetween(10,500),
            'description' => $this->faker->text(80),
        ];
    }
}
