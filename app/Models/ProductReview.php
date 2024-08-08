<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ProductReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'order_id',
        'rating',
        'title',
        'review_text'
    ];

    public function getAllRawOriginals()
    {
        $rawOriginals = [];
        foreach ($this->attributes as $key => $value) {
            $rawOriginals[$key] = $value;
        }
        return $rawOriginals;
    }

    public function user()
    {
        return $this->belongsTo(User::class); 
    }
}
