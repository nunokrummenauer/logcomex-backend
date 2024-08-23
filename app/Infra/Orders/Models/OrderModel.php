<?php

namespace App\Infra\Orders\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\OrderFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{

    protected $table = 'orders';

    protected $fillable = [
        'amount',
        'customer_cpf',
        'tracking_code',
        'description',
        'invoice_number'
    ];

    public $timestamps = false;

    protected static function newFactory(): Factory
{
    return OrderFactory::new();
}


}