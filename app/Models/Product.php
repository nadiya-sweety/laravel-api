<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    // Sesuaikan dengan kolom tabel products milikmu
    protected $fillable = ['category_id', 'nama', 'harga'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
