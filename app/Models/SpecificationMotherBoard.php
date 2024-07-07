<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationMotherBoard extends Model
{
    use HasFactory;

    protected $table = "specifications_mother_board_create";


    protected $fillable = [
       'motherboard_manufacturer',
       'socket_processor',
       'chipset',
       'onboard_slots',
       'back_panel_ports',
       'networck',
       'total_number_of_memory_slots',
       'product_id'
    ];

    public function  product(){

        return $this->belongsTo(Product::class,'product_id','id');
       }
}
