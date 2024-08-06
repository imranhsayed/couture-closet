<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

	protected $fillable = ['name', 'value', 'description'];

	// Define the relationship
	public function images()
	{
		return $this->hasMany(ProductImage::class);
	}

    /**
     * Get the order items for the product.
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
