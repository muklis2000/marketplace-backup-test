<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aksi extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'judul', 'sub_judul', 'photo'
    ];

    protected $hidden = [

    ];
}
