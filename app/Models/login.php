<?php

namespace App\Models;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $fillable = ['email', 'password',];
    protected $table = 'create_accounts';
    const CREATED_AT = 'created_datetime';
    const UPDATED_AT = 'updated_datetime';


}