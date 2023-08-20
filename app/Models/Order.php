<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    protected $guarded=[];
}
