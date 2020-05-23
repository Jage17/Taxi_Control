<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //

    protected $fillable = ['color'=>'required','no_placa'=>'required',
        'year'=>'required','model_id'=>'required','brand_id'=>'required'];
}
