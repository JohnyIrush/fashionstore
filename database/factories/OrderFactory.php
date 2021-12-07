<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => 'Awaiting Delivery',
            'order' => $this->faker->paragraph(),
            'payment_id' => 1,
            'transaction_id' => 1,
            'user_id' => 1,
        ];
    }
}
