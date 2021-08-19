<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Product extends Model
{
    use HasFactory;

    public function cars() {
        return $this->belongsToMany(Car::class, 'car_products', 'Product_id', 'Car_id')->withTimestamps();
    }
    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mark()
    {
        return $this->belongsTo(Mark::class, 'Mark_id');
    }
}
