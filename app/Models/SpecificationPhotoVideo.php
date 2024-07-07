<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationPhotoVideo extends Model
{
    use HasFactory;

    protected $table="specifications_foto_video";

    protected $fillable=[
        'number_camera',
        'principal_camera_resolution',
        'frontal_camera_resolution',
        'video_rezolution',
        'fotvideo_features',
        'blit',
        'product_id',
    ];


    public function  product(){

        return $this->belongsTo(Product::class,'product_id','id');
       }
}
