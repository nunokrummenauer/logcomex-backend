<?php

namespace App\Domain\Orders\Interfaces\Repositories;

use App\Infra\Orders\Filters\OrderFilters;

interface OrderRepositoryInterface
{
    public function listAllorder(OrderFilters $filters);
}