<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','second_name','surname','second_surname', 'email', 'password','telephone','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role(){

        return $this->belongsTo('App\Role');
    }

    public function superAdministrador(){

        if($this->role->name_role == 'superAdministrador'){
            return true;
        }
        return false;
    }

    public function secretaria(){

        if($this->role->name_role == 'secretaria'){
            return true;
        }
        return false;
    }

    public function taxista(){

        if($this->role->name_role == 'taxista'){
            return true;
        }
        return false;
    }
    }
