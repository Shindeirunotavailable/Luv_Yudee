<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    public function review(Request $request){
        
        // dd($request);
        $star = $request->input('star');
        $name = $request->input('name');
        $email = $request->input('email');
        $content = $request->input('content');

        $data = [
            'review_star' => $star,
            'review_name' => $name,
            'review_email' => $email,
            'review_content' => $content,
            'create_datetime' => date('Y-m-d H:i:s'),
            'update_datetime' => date('Y-m-d H:i:s'),
        ];
        
        DB::table('reviews')->insert($data);
        $userreview = DB::table('reviews')->get();
        return redirect('/property');
    }
}