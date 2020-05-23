<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    //
    protected $fillable = [
        'depature_address','arrival_address','mileage','race_amount',
        'commission_amount','link_route','created_at','update_at','taxi_driver_id','user_id',
    ];
}
