<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SchoolPlant extends Model
{
    protected $fillable =[
        'plant_number',
        'plant_id',
        'image',
        'location_id',
        'location_detail',
        'condition_id',
        'condition_detail',
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
    
        public function condition(): BelongsTo
    {
        return $this->belongsTo(Condition::class);
    }

        public function plant(): BelongsTo
    {
        return $this->belongsTo(Plant::class);
    }
}
