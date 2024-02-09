<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKEditor extends Controller
{
    public function editor()
    {
        return view('CKEditor.editor');
    }

    public function store(Request $request)
    {
        echo $request->input('editor');
    }
}
