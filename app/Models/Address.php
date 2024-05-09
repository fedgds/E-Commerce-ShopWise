<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'full_name',
        'phone',
        'address',
        'district',
        'city'
    ];
    
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
