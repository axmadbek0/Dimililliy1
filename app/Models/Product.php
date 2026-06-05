<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id',
        'is_top',
        'is_special',
        'stock_quantity',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_top' => 'boolean',
        'is_special' => 'boolean',
    ];

    public const CATEGORIES = [
        'Shim',
        'Kastyum',
        'Atlas Ishton',
        'Atlas Ko\'ylak',
        'Cosmetics',
        'Others',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function scopeTop($query)
    {
        return $query->where('is_top', true);
    }

    public function scopeSpecial($query)
    {
        return $query->where('is_special', true);
    }

    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    public function getImageUrlAttribute(): string
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return asset('images/placeholder.jpg');
    }
}
