<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\profile;


class adminController extends Controller
{
    public function indexadmin()
    { 
        return view("dashboardAdmin.indexAdmin");
    }
    

    public function index()
    {
        $profiles = Profile::all(); // ดึงข้อมูลทั้งหมดจากตาราง profiles
        return view('dashboardAdmin.indexAdmin', ['profiles' => $profiles]);
    }
    
 
    
    

}
