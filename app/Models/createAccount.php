<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createAccount extends Model 
{
    use HasFactory;
    protected $fillable = ['email', 'password','status','created_datetime','updated_datetime','created_by','updated_by'];

}
