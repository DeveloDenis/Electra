<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationGeneral extends Model
{
    use HasFactory;

    protected $table="specifications_general";

    protected $fillable = [
          'device_type',
          'model',
          'tehnology',
          'destined_for',
          'conectivity',
          'package_contents',
          'operating_system',
          'operation_system_version',
          'lineup',
          'weight',
          'height',
          'lenght',
          'dimension',
          'color',
          'SIM_slots',
          'SIM_type',
          'bluetooth_version',
          'senzors',
          'relased_yaer',
          'product_id',
    ];

    public function  product(){

        return $this->belongsTo(Product::class,'product_id','id');
       }
}
