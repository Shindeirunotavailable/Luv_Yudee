<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class resetPassword extends Model
{
    public static function modelresetPassword($data ,$email){
        DB::table('password_resets')->where('email', $email)->update($data);
    }

    public static function GetEmailRestPassword($username){

        $existingUser = DB::table('password_resets')->where('email', $username)->first();

        return $existingUser;
    }



}
