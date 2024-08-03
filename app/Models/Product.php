<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

	// Define the relationship
	public function images()
	{
		return $this->hasMany(ProductImage::class);
	}
}
