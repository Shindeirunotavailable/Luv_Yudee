<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    public function review(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
    }
}
