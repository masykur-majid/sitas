<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plant extends Model
{
    protected $fillable = [
        'common_name',
        'scientific_name',
        'other_common_name',
        'category_id',
    ];

    /**
    * @return the category that the plant is belonged to
    */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
