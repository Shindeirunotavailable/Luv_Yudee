<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\profile;

use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use App\Models\Media;
use App\Models\login;

use App\Models\Amenities;
use App\Models\Province;
use App\Models\Amphure;
use App\Models\District;
use App\Models\Reviews;


class adminController extends Controller
{
    public function indexadmin(Request $request)
    {
        $pp_reviews=DB::table('pp_reviews')->get();
        $profiles=DB::table('profiles')->get();
        $id_property = $request['id_property'];
        $property = Property::property($id_property);
        $blogs = DB::table('pp_properties')
        ->join('pp_media', 'pp_properties.id_property', '=', 'pp_media.id_property')->get();
        $media = DB::table('pp_media')->get();
        $this->data['provinces'] = Province::all();
        $this->data['amphures'] = Amphure::all();
        $this->data['districts'] = District::all();
        $this->data['amenities'] = Amenities::all();
        $this->data['media'] = Media::all();
        $this->data['pp_reviews'] = Reviews::all();
        // $this->data['pp_reviews'] = Reviews::paginate(5);
        $this->data['profiles'] = profile::all();
        $this->data['property'] = $property;
        $this->data['media'] = $media;
        $this->data['blogs'] = $blogs;
        if (isset($request['id_property'])) {
            $this->data['id_property'] = $request['id_property'];
        }
        return view("dashboardAdmin.indexAdmin")->with('data', $this->data);
    }


    public function index()
    {
        $profiles = Profile::all(); // ดึงข้อมูลทั้งหมดจากตาราง profiles
        return view('dashboardAdmin.indexAdmin', ['profiles' => $profiles]);
    }

    
    public function deleteporfile($create_by){
        DB::table('profiles')->where('create_by',$create_by)->delete();
        DB::table('users')->where('id',$create_by)->delete();

        return redirect()->back();
    }




}
