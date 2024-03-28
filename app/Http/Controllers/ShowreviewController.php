<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class ShowreviewController extends Controller
{
    public function showreview () {
        $showrivew=Reviews::orderByDesc('id_review')->where('review_status',true)->get();
        return view('propertyDetail.property')->with('data', $showrivew);
    }
}
