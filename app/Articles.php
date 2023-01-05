<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'image',
        'title',
        'author',
        'category',
        'tag',
        'date',
        'description',
        'active'
    ];
        
    public $table = 'articles';
}
