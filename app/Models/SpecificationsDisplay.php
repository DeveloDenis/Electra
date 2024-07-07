<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationsDisplay extends Model
{
    use HasFactory;

    protected $table="specifications_display";

    protected $fillable = [
        'diagonal_display',
        'format_display',
        'display_type',
        'tehnology_display',
        'refresh_rate',
        'luminozity',
        'touchscreen',
        'rezolution',
        'display_finish',
        'display_functions',
        'product_id',
        
    ];


    public function  product(){

        return $this->belongsTo(Product::class,'product_id','id');
       }
}
