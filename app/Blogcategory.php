<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blogcategory extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'name', 'slug'
    ];

    protected $hidden = [

    ];
}
