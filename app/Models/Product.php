<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'brand',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'shipping_price',
        'quantity',
        'trending',
        'featured',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
        
    ];

    public function productImages(){


        return $this->hasMany(ProductImage::class, 'product_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }

    public function productColors(){
        return $this->hasMany(ProductColor::class,'product_id','id');
    }


    public function specificationCase(){

        return $this->belongsTo(SpecificationCase::class,'id','product_id');
    }


    public function specificationGeneral(){

        return $this->belongsTo(SpecificationGeneral::class,'id','product_id');
    }

    public function specificationMemory(){

        return $this->belongsTo(SpecificationMemory::class,'id','product_id');
    }


    public function specificationMotherboard(){

        return $this->belongsTo(SpecificationMotherBoard::class,'id','product_id');
    }


    public function specificationMultyMedia(){

        return $this->belongsTo(SpecificationMultymedia::class,'id','product_id');
    }


    public function specificationPhotoVideo(){

        return $this->belongsTo(SpecificationPhotoVideo::class,'id','product_id');
    }



public function specificationProcessor(){

        return $this->belongsTo(SpecificationProcessor::class,'id','product_id');
    }


    public function specificationDisplay(){

        return $this->belongsTo(SpecificationsDisplay::class,'id','product_id');
    }


    public function specificationStorage(){

        return $this->belongsTo(SpecificationStorage::class,'id','product_id');
    }


    public function specificationVideoCard(){

        return $this->belongsTo(SpecificationVideoCard::class,'id','product_id');
    }


    public function comments(){
        return $this->hasMany(Comment::class, 'product_id','id');
    }

    public function ratings(){
        return $this->hasMany(Rating::class, 'prod_id','id');
    }

}
