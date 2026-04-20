<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SchoolPlant extends Model
{
    protected $fillable = [
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

    public static function generateNextNumber(): string
    {
        $lastRecord = self::latest('id')->first();
        if (!$lastRecord) {
            return 'PLANT-0001';
        }

        // Increment the numeric part
        $lastNumber = (int) str_replace('PLANT-', '', $lastRecord->plant_number);
        return 'PLANT-' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
    }
}
