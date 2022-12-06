<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "item";
    public  $timestamps = false;
    protected $fillable = [
        'item_id',
        'name',
        'price'
    ];
}
