<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    protected $fillable = [
        'email',
        'token',
        'role_ids'
    ];

    protected $casts=[
        'role_ids'=>'array'
    ];
}
