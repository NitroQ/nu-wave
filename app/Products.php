<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'image',
        'title',
        'tag',
        'category',
        'shop',
        'abstract',
        'purpose',
        'date',
        'active'
    ];
        
    public $table = 'products';
}
