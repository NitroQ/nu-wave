<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exhibits extends Model
{
    protected $fillable = [
        'image',
        'title',
        'tag',
        'category',
        'abstract',
        'purpose',
        'date',
        'active'
    ];
        
    public $table = 'exhibits';
}
