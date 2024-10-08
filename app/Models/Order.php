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
        'status',
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

    /**
     * Get the user 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the provincial tax rate
     */
    public function provincialTaxRate()
    {
        return $this->belongsTo(ProvincialTaxRate::class);
    }

    /**
     * Get the status of the order
     */
    public function getStatusAttribute($value)
    {
        $statuses = [
            1 => 'Processing',
            2 => 'Shipped',
            3 => 'Delivered',
            4 => 'Cancelled',
        ];

        return $statuses[$value] ?? 'Unknown';
    }

    // Added Transactions Relationship

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

}
