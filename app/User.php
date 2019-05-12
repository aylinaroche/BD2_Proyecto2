<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
#use Illuminate\Foundation\Auth\User as Authenticatable;


#use Illuminate\Contracts\Auth\MustVerifyEmail;
#use Illuminate\Foundation\Auth\User as Authenticatable;
#use Illuminate\Foundation\Auth\Access\Authorizable;
#use Tymon\JWTAuth\Contracts\JWTSubject;
#se Illuminate\Database\Eloquent\Model;

#use JWTAuth;

class User extends Eloquent implements Authenticatable
{
    use Notifiable;
    use AuthenticableTrait;

    protected $connection = 'mongodb';
    protected $collection = 'users';


    protected $fillable = [
         'nickname', 'password', 'nombre', 'apellido', 'edad'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
