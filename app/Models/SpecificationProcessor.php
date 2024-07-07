<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationProcessor extends Model
{
    use HasFactory;

    protected $table='specification_processor';

    protected $fillable = [
        'processor_type',
        'processor_model',
        'processor_tehnology',
        'processor_frequency',
        'processor_stocket',
        'processor_manufactures',
        'number_of_cores',
        'cache',
        'integrated_graphics_processor',
        'product_id',
    ];


    public function  product(){

        return $this->belongsTo(Product::class,'product_id','id');
       }
}
