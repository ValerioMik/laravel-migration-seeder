<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $fillable = [

        'name',
        'release_date',

        'collaboration_names',
        'song_text',
        
        'price',
        
    ];

}
