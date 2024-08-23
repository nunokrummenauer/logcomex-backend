<?php

namespace Database\Factories;

use App\Infra\Orders\Models\OrderModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Model>
 */
class OrderFactory extends Factory
{
    protected $model = OrderModel::class;

    public function definition(): array
    {
        return [
            'amount' => rand(15,5575) / 10,
            'customer_cpf' => strval(random_int(10000000000,99999999999)),
            'tracking_code' => Str::random(10),
            'description' => Str::random(),
            'invoice_number' => random_int(1,1000000)

        ];
    }
}
