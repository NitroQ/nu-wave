<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrincipalAuthors extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'course'
    ];
        
    public $table = 'principalauthors';
}
