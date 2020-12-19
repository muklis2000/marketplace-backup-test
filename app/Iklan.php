<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Iklan extends Model
{
     use SoftDeletes;

    protected $fillable =[
        'name', 'photo'
    ];

    protected $hidden = [

    ];
}
