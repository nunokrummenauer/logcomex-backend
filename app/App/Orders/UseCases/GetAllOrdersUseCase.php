<?php

namespace App\App\Orders\UseCases;

use App\Domain\Order\Interfaces\Repositories\OrderRepositoryInterface;
use Exception;

class GetAllOrdersUseCase
{
    protected $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    public function run($orderFilters) 
    {
        try{
            $orders = $this->orderRepository->listAllorder($orderFilters);
            return $orders;
        }
        catch(Exception $e){
            $e->getMessage();
        }

    }
}
