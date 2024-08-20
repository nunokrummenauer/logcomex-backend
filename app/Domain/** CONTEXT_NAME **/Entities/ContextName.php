<?php

namespace App\Domain\CONTEXT_NAME\Entities;


class ContextName
{
  
    protected $dado1;
    protected $dado2;

    /**
     * @return mixed
     */
    public function getDado1()
    {
        return $this->dado1;
    }

    /**
     * @param mixed $token
     * @return **ContextName**
     */
    public function setDado1($dado1)
    {
        $this->dado1 = $dado1;
        return $this;
    }

}