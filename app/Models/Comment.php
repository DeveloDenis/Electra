<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    protected $table = "comment";


    protected $fillable = [
         'content',
         'user_id',
         'product_id',
        
    ];


    public function user(){

        return $this->belongsTo(User::class, 'user_id','id');
    }


    public function product(){

        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function rating(){
        return $this->belongsTo(Rating::class,'user_id','user_id');
    }
}
