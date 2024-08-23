<?php

namespace App\Domain\Order\Interfaces\Repositories;

use App\Domain\Order\Entities\Order;

interface OrderRepositoryInterface
{
    public function listAllorder(OrderFilters $filters)
}