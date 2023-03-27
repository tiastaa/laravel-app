<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'title',
        "price",
        "data_make",
        "maker_id",
    ];

    use HasFactory;

    public function call(): HasMany
    {
        return $this->hasMany(Product::class);
    }

}
