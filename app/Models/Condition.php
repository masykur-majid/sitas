<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Condition extends Model
{
    protected $fillable = [
        'condition_name'
    ];
}


