<?php

namespace App\Domain\Orders\Entities;


class Order
{
  
    protected $amount;
    protected $customer_cpf;
    protected $tracking_code;
    protected $description;
    protected $invoice_number;

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->dado1;
    }

    /**
     * @param mixed $token
     * @return **Order**
     */
    public function setDado1($dado1)
    {
        $this->dado1 = $dado1;
        return $this;
    }

}