<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['order_id', 'status', 'amount', 'type',  'created_by', 'updated_by'];

    public function order()
    {
        return $this->hasOne(Order::class, 'id', 'order_id');
    }
}
