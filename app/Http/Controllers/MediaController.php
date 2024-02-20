<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Media;


class MediaController extends Controller
{
    //
    // public function media()
    // {
    //     return view('image.form');
    // }
    // public function storeMedia(Request $request)
    // {
    //     // dd($request->all());
    //     $request->validate([
    //         'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
    //     ]);
    //     $imageName = $request->image->getClientOriginalName();

    //     // Pubic Folder
    //     $request->image->move(public_path('image1'), $imageName);

    //     return back()->with('success', 'Image uploaded Successfully')
    //              ->with('image', $imageName);

    // }

    // public function mediaconnect(Request $request)
    // {
    //     $id_media = $request['id_media'];

    //     $media = Media::media($id_media);

    //     $this->data['media'] = $media;

    //     if (isset($request['id_media'])) {
    //         $this->data['id_media'] = $request['id_media'];
    //     }
    //     return view('dashboard.sidebardashboard')->with('data', $this->data);
    // }

    // public function storeMedia(Request $request)
    // {
    //     $data = array(
    //         'image' => $request['image'],
    //     );
    //     if (isset($request['id_media'])) {
    //         $id_media = $request['id_media'];
    //         $data['updated_at'] = date('Y-m-d H:i:s');
    //         $data['updated_by'] = 2;
    //         DB::table('pp_media')->where('id_media', $request['id_media'])->update($data);
    //         Session::flash('data', 'Property updated successfully!');
    //     } else {
    //         $data['updated_at'] = date('Y-m-d H:i:s');
    //         $data['created_at'] = date('Y-m-d H:i:s');
    //         $data['created_by'] = 1;
    //         $id_media = DB::table('pp_media')->insertGetId($data);
    //         Session::flash('data', 'Media created successfully!');
    //     }
    //     return redirect('addproperty?id_media=' . $id_media);
    // }
}
