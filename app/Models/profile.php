<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['name', 'lastname', 'phone', 'mobile', 'email','imageuser']; 
    //    protected $fillable = ['imageuser'];
    public $timestamps = false; // ไม่ใช้งาน timestamps

}
