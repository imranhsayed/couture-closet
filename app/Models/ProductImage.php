<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [ 'product_id', 'image_url', 'display_order' ];

    use HasFactory;
	protected $table = 'product_images';
	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
