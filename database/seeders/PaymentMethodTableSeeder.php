<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::truncate();

        PaymentMethod::create([
            'name' => 'Mpesa',
        ]);

        PaymentMethod::create([
            'name' => 'Stripe',
        ]);

        PaymentMethod::create([
            'name' => 'Paypal',
        ]);

    }
}
