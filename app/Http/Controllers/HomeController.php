<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function home(){
        return view("home.home");
    }
    public function hometest(){
        return view("home.hometest");
    }
    public function test(){
        return view("home.test");
    }
    public function non(){
        return view("home.non");
    }
    public function slider(){
        return view("home.slider");
    }
    public function details(){
        return view("home.details");
    }


    // earth
    public function sidebar(){
        return view("dashboard.sidebar");
    }
    public function property(){
        return view(".propertyDetail.property");
    }
}


