<?php

namespace App\Infra\Orders\Models;
use Illuminate\Database\Eloquent\Builder;

class OrderFilters
{

    protected $orderModel;
    protected $orderQuery;

    public function __construct(OrderModel $orderModel)
    {
        $this->orderModel = $orderModel;
    }

    public function mountFilters($filterParams): OrderModel
    {
        dd($filterParams);

        $this->orderQuery = $this->orderModel;
        if (!empty($filterParams['description'])) {
            $this->mountDescriptionFilter($filterParams['description']);
        }

        if (!empty($filterParams['customer_cpf'])) {
            $this->mountcustomerCpfFilter($filterParams['customer_cpf']);
        }

        if (!empty($filterParams['tracking_code'])) {
            $this->mountTrackingCodeFilter($filterParams['tracking_code']);
        }

        if (!empty($filterParams['invoice_number'])) {
            $this->mountInvoiceNumberFilter($filterParams['invoice_number']);
        }

        return $this->orderQuery;
    }

    private function mountDescriptionFilter($filterParams): void
    {
        $this->orderQuery->where('description', 'like', '%' . $filterParams . '%');
    }

    private function mountcustomerCpfFilter($filterParams): void
    {

        $this->orderQuery->where('.cpf_customer', '=', $filterParams);
    }

    private function mountTrackingCodeFilter($filterParams): void
    {
        $this->orderQuery->where('.tracking_code', '=', $filterParams);
    }

    private function mountInvoiceNumberFilter($filterParams): void
    {
        $invoices = explode('-', $filterParams);
        $value1 = (int)$invoices[0];
        $value2 = (int)$invoices[1];

        $this->orderQuery->whereBetween('invoice_number', [$value1, $value2]);
    }

}
