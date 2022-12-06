<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    public  $timestamps = false;
    protected $fillable = [
        'user_id',
        'email',
        'password',
        'role'
    ];
}
