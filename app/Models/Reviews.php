<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reviews extends Model
{
    // use HasFactory;
    public static function Gethome($username){

        $existingEmail = DB::table('reviews')->where('review_email', $username)->first();

        return $existingEmail;
    }
}
