<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pp_Newsletter extends Model
{
    public static function Gethome($username){

        $existingEmail = DB::table('pp_newsletters')->where('newsletter_email', $username)->first();

        return $existingEmail;
    }
}
