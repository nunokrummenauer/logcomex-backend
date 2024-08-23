<?php

namespace App\Infra\Orders\Repositories;

use App\Domain\Order\Entities\Order;
use App\Domain\Order\Interfaces\Repositories\OrderRepositoryInterface;
use App\Infra\Orders\Models\OrderFilters;
use App\Infra\Orders\Models\OrderModel;

class OrderRepository implements OrderRepositoryInterface
{
    protected OrderModel $model;

    public function __construct()  
    {
        $this->model = new OrderModel();
    }

    public function listAllOrder($filters)
    {
        $orderFilters = new OrderFilters($this->model);
        $orderFilters->mountFilters($filters)->get()->toArray();
        return $orderFilters;
    }
}