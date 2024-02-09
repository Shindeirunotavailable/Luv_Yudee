<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->data['css']=array("login.css");
    }

    public function home(){
        $this->data['b']=1;
        // print_r($this->data['css']);exit;
        return view("home.home")->with("a",$this->data);

    }
}


