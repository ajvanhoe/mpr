<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    const VERIFIED_USER ='1';
    const UNVERIFIED_USER = '0';

    const ADMIN_USER = 'true';
    const REGULAR_USER ='false';
   
    // name of table in database;
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password','verification_token', 'verified'
    ];

    protected $hidden = [
        'password', 'remember_token','verification_token'
    ];

     // generate verification token for users  * MARKO
     public static function generateVerificationCode(){
        return str_random(40);
    }

}
