<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'nama', 'no_rekening', 'cabang', 'kabupaten', 'users_id', 'banklist_id'
    ];

    protected $hidden = [

    ];

    public function user(){
        return $this->hasOne( User::class, 'id', 'users_id');
    }

    public function banklist(){
        return $this->belongsTo( Banklist::class, 'banklist_id', 'id');
    }
}
