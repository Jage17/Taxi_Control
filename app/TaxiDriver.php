<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxiDriver extends Model
{
    //
    protected $fillable = [
        'first_name','second_name','surname','second_surname', 'email','telephone',
        'no_licencia','vehicle_id','status_id','zone_id',
    ];
}
