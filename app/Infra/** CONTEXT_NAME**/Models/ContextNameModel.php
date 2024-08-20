<?php

namespace App\Infra\CONTEXT_NAME\Models;

use Illuminate\Database\Eloquent\Model;

class ContextNameModel extends Model
{
    protected $table = 'context_name_table';

    protected $fillable = [
        'name',
        'description'
    ];

    public $timestamps = false;
}