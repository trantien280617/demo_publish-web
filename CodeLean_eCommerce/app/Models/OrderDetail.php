<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table='order_details';
    protected $primaryKey='id';
    protected $guarded=[];

    public function order() {
    	return $this->belongsTo(related: Order::class, foreignKey: 'order_id', localKey: 'id');
    }

    public function product() {
    	return $this->hasMany(related: Product::class, foreignKey: 'product_id', localKey: 'id');
    }
}
