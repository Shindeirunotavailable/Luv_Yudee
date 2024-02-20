<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
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
        $request->validated([
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
        // dd($request->all());
    }
}
