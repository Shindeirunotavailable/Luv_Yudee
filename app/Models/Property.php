<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Property extends Model
{
    public static function property($id_properties='')
    {
        $query = DB::table('pp_properties');
            if($id_properties){
               return $query->where('id_properties',$id_properties)
                ->first();
            }else{
               return $query->get();
            }
    }
}
