<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Innovators extends Model
{
    protected $fillable = [
        'iname',
        'tag' ,
        'date',
        'position',
        'accomplishments',
        'about',
        'linkedin',
        'facebook',
        'youtube',
        'email' ,
        'website',
        'active'
    ];
        
    public $table = 'innovators';
}
