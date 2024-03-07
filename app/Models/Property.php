<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Property extends Model
{
    public static function property($id_propertie='')
    {
        $query = DB::table('pp_properties');
            if($id_propertie){
               return $query->where('id_propertie',$id_propertie)
                ->first();
            }else{
               return $query->get();
            }
    }
}
