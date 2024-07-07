<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationMultymedia extends Model
{
    use HasFactory;

    protected $table ="specifications_multymedia";

    protected $fillable =[
          'optical_drive',
          'web_camera',
          'audio',
          'audio_tehnologii',
          'loudspeaker_manufacturer',
          'product_id',
    ];


    public function  product(){

        return $this->belongsTo(Product::class,'product_id','id');
       }
}
