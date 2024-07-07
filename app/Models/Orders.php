<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable =[
          'user_id',
          'tracking_no',
          'fullname',
          'email',
          'phone',
          'pincode',
          'country',
          'city',
          'street',
          'status_message',
          'payment_mode',
          'payment_id',
    ];


    public function orderItems(){

        return $this->hasMany(OrderItems::class, 'order_id','id');
    }


}
