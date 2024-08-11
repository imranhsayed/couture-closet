<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'provincial_tax_rate_id',
        'full_name',
        'email',
        'pst',
        'gst',
        'hst',
        'sub_amount',
        'total_amount',
        'shipping_phone_number',
        'shipping_address',
        'billing_phone_number',
        'billing_address'
    ];

    /**
     * Get the order items for the order.
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
