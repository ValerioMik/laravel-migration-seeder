<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [

        'song',
        'release',
        'reference',
        'text',
        'price',
        'company',
    ];
}

