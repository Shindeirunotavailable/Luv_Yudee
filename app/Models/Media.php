<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public static function media($id_media='')
    {
        $query = DB::table('pp_media');
            if($id_media){
               return $query->where('id_media',$id_media)
                ->first();
            }else{
               return $query->get();
            }
    }
}
