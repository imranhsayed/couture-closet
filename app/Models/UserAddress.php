<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'street', 'postal_code', 'city', 'province', 'country'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
