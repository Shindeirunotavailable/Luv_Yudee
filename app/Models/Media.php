<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'pp_media';

    public function property()
    {
        return $this->belongsTo(Property::class, 'id_property');
    }
}
