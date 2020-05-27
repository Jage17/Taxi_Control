<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{
    //
    protected $fillable = [
        'first_name','second_name','surname','second_surname', 'email','telephone',
    ];
}