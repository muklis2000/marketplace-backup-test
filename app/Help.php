<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Help extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'topik', 'description', 'slug'
    ];

    protected $hidden = [

    ];
}
