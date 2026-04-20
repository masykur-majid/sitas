<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plant extends Model
{
    //nama tabel di database
    protected $table = 'plants';

    protected $fillable = [
        'common_name',
        'scientific_name',
        'english_name',
        'category_id',
    ];
    
    //menghubungkan FK di tabel plants ke PK di tabel categories
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
