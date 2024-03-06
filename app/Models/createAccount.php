<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class createAccount extends Model 
{
    public static function Getemail($username){

        $existingUser = DB::table('user')->where('email', $username)->first();

        return $existingUser;
    }
}
