<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationVideoCard extends Model
{
    use HasFactory;

    protected $table = "specifications_video_card";

    protected $fillable = [
     'videocard_type',
     'videocard_manufacturer',
     'chipset_video',
     'video_card_model',
     'video_memory_capacity',
     'videocard_memory_type',
     'videocard_memory_capacity',
     'videocard_type_memory',
     'videocard_tehnologi',
     'videocard_ports',
     'product_id',
    ];


    public function  product(){

        return $this->belongsTo(Product::class,'product_id','id');
       }
}
