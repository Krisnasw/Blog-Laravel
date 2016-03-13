<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    //
    protected $table = 'tb_admin';
    protected $fillable = array('username', 'password');


    protected $hidden = [
        'password', 'remember_token',
    ];
}
