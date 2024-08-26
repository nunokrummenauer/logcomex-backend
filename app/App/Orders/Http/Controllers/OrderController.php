<?php

namespace App\App\Orders\Http\Controllers;

use App\App\Orders\UseCases\GetAllOrdersUseCase;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class OrderController extends BaseController
{
    protected $getAllOrders;

    public function __construct(GetAllOrdersUseCase $getAllOrders)
    {
        $this->getAllOrders = $getAllOrders;
    }
    public function getAllOrders(Request $request) 
    {

        $orderFilters = [
            'cpf_customer' => $request->cpf_customer,
            'tracking_code' => $request->tracking_code,
            'description' => $request->description,
            'invoice_number' => $request->invoice_number
        ];

        return $this->getAllOrders->run($orderFilters);
    }
}
