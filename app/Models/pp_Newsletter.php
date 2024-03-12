<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pp_Newsletter extends Model
{
    public static function Gethome($username){

        $existingEmail = DB::table('newsletters')->where('email', $username)->first();

        return $existingEmail;
    }
}
