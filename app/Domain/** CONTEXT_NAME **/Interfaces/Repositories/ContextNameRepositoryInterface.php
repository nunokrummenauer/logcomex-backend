<?php

namespace App\Domain\CONTEXT_NAME\Interfaces\Repositories;

use App\Domain\CONTEXT_NAME\Entities\ContextName;

interface ContextNameRepositoryInterface
{
    public function listAllContextName(ContextName $entityContextName) ;
}