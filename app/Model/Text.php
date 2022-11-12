<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $table = "data";
    public  $timestamps = false;
    protected $fillable = [
        'id',
        'text'
    ];
}
