<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationCollectedPolicy extends Model
{
    use HasFactory;


    protected $table = "_information_collected_policy";
    

    protected $fillable = [
        'paragraph1',
        'paragraph2',
        'paragraph3',
        'paragraph4',
        'paragraph5',
        'paragraph6',
        'paragraph7',
        'paragraph8',
        'paragraph9',
        'paragraph10',
    ];
}
