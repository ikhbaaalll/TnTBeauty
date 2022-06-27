<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'product_id'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
