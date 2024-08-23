<?php

namespace App\App\Orders\UseCases;

use App\Domain\Order\Entities\Order;
use App\Infra\Orders\Repositories\OrderRepository;

class GetAllOrdersUseCase
{
    public function run($orderFilters) 
    {
        $order = new Order();
        $order->setCpf($orderFilters['cpf']);
        $order->setDescription($orderFilters['description']);
        $order->setTrackingCode($orderFilters['tracking_code']);
        $order->setInvoiceNumber($orderFilters['invoice_number']);
        $orderRepository = new OrderRepository();
        $orders = $orderRepository->getAllOrders($order);
    }
}
