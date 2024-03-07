<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Property extends Model
{
    public static function property($id_property='')
    {
        $query = DB::table('pp_properties');
            if($id_property){
               return $query->where('id_property',$id_property)
                ->first();
            }else{
               return $query->get();
            }
    }
}
