<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['total_price', 'status', 'session_id', 'user_address_id',  'created_by', 'updated_by'];

    function order_items()  {
        return $this->hasMany(OrderItem::class);
    }
}
