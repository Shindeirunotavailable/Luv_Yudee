<?php

namespace App\Models;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class login extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = ['email', 'password', 'name', 'status']; 

    // const CREATED_AT = 'created_datetime';
    // const UPDATED_AT = 'updated_datetime';


}
