<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {  
         $status = $this->faker->randomElement(['billed','paid','void']); //billed paid void
        return [
            'user_id' => User::factory(),
            'amount' => $this->faker->numberBetween(100,500),
            'status' => $status,
            'billed_date' => $this->faker->dateTimeThisDecade(),
            'paid_date' => $status == 'paid' ? $this->faker->dateTimeThisDecade() : NULL
            
        ];
    }
}
