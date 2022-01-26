<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [

        'name',
        'surname',

        'date',
        'gender',

        'biography',
        'sold',
        
    ];
}
