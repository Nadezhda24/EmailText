<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ListItem extends Model{

    protected $table = "list_item";
    public  $timestamps = false;
    protected $fillable = [
        'check_list_id',
        'is_bought',
        'item_id'
    ];
}
