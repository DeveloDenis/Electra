<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable =[
         'user_id',
         'product_id',
         'product_color_id',
    ];


    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function products(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function productColor(){
        return $this->belongsTo(Color::class, 'product_color_id', 'id');
    }

    public function Color(){
        return $this->belongsTo(ProductColor::class, 'product_color_id', 'id');
    }
}
