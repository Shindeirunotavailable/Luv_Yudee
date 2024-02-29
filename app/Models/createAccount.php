<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createAccount extends Model 
{
    use HasFactory;
    protected $fillable = ['modal_email', 'modal_password','status'];

}
