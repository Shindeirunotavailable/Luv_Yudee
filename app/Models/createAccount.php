<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class createAccount extends Model 
{
    
    const CREATED_AT = 'create_datetime	';
    const UPDATED_AT = 'update_datetime';

    public static function Getemail($username){

        $existingUser = DB::table('user')->where('email', $username)->first();

        return $existingUser;
    }

    public static function editPassword($email,$password){
        DB::table('user')->where('email', $email)->update(['password'=>$password]);

    }

}
