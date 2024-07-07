<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationCase extends Model
{
    use HasFactory;

    protected $table = "specifications_case";

    protected $fillable = [
       'case_type',
       'motherboard_format_compatibility',
       'source_power',
       'processor_cooling_system',
       'product_id'
    ];


   public function  product(){

    return $this->belongsTo(Product::class,'product_id','id');
   }
}
