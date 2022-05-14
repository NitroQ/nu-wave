<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'image',
        'title',
        'category',
        'tag',
        'description',
        'active'
    ];
        
    public $table = 'articles';
}
