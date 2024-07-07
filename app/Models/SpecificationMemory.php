<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationMemory extends Model
{
    use HasFactory;


    protected $table = "specifications_memory";

    protected $fillable = [
        'memory_capacity',
        'memory_type',
        'memory_manufacturer',
        'memory_frequez',
        'product_id',
    ];

    public function  product(){

        return $this->belongsTo(Product::class,'product_id','id');
       }
}
