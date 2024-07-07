<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationStorage extends Model
{
    use HasFactory;

    protected $table="table_specifications_storage";

    protected $fillable = [
       'storage_type',
       'producerSSDmodel',
       'SSD_capacity',
       'SSD_interface',
       'product_id',
    ];


    public function  product(){

        return $this->belongsTo(Product::class,'product_id','id');
       }
}
