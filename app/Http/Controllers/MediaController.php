<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    //
    public function media()
    {
        return view('image.form');
    }
    public function storeMedia(Request $request)
    {
        dd($request->all());
    }
}
