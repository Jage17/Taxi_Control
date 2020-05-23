<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'first_name','second_name','surname','second_surname', 'email','telephone',
    ];
}
