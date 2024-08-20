<?php

namespace App\Infra\CONTEXT_NAME\Repositories;

use App\Domain\CONTEXT_NAME\Entities\ContextName;
use App\Domain\CONTEXT_NAME\Interfaces\Repositories\ContextNameRepositoryInterface;
use App\Infra\CONTEXT_NAME\Models\ContextNameModel;

class ContextNameRepository implements ContextNameRepositoryInterface
{
    protected ContextNameModel $model;

    public function __construct(ContextNameModel $model)  
    {
        $this->model = $model;
    }

    public function listAllContextName(ContextName $entityContextName) 
    {
        return $this->model->select('*')->toArray();
    }
}