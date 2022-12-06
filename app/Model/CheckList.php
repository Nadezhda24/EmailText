<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CheckList extends Model
{
    protected $table = "check_list";
    public  $timestamps = false;
    protected $fillable = [
        'check_list_id',
        'data',
        'name',
        'user_id'
    ];

}
