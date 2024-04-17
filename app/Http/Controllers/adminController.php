<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Media;
use App\Models\login;
use App\Models\profile;
use App\Models\Property;
use App\Models\Amenities;
use App\Models\Province;
use App\Models\Amphure;
use App\Models\District;
use App\Models\Reviews;
use App\Models\Reply;

class adminController extends Controller
{
    public function indexadmin(Request $request)
    {
        $pp_reviews=DB::table('pp_reviews')->get();
        $pp_reply=DB::table('pp_reply')->get();
        $profiles=DB::table('profiles')->get();
        $users=DB::table('users')->get();

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
        $this->data['pp_reply'] = Reply::all();
        // $this->data['pp_reviews'] = Reviews::paginate(5);
        $this->data['profiles'] = profile::all();
        $this->data['users'] = login::all();

        $this->data['property'] = $property;
        $this->data['media'] = $media;
        $this->data['blogs'] = $blogs;
        if (isset($request['id_property'])) {
            $this->data['id_property'] = $request['id_property'];
        }
        return view("dashboardAdmin.indexAdmin")->with('data', $this->data);
    }


    // public function index()
    // {
    //     $profiles = Profile::all(); // ดึงข้อมูลทั้งหมดจากตาราง profiles
    //     return view('dashboardAdmin.indexAdmin', ['profiles' => $profiles]);
    // }

    public function index() {
        $profiles = Profile::all(); // ดึงข้อมูลโปรไฟล์ทั้งหมด
        $users = login::all(); // ดึงข้อมูลผู้ใช้ทั้งหมด
        return view('dashboardAdmin.adminProfile', ['data' => ['profiles' => $profiles, 'users' => $users]]);
    }
    
    

    
    public function deleteporfile($create_by){
        DB::table('profiles')->where('create_by',$create_by)->delete();
        DB::table('users')->where('id',$create_by)->delete();

        return redirect()->back();
    }

    // public function showporfile($id_profiles){
    //     $profile = DB::table('profiles')->where('id_profiles', $id_profiles)->first();
    //     return view("dashboardAdmin.indexAdmin", ['profile' => $profile]);
    // }
    
    public function showporfile($id_profiles){
    $profile = Profile::where('id_profiles', $id_profiles)->first();

    // ตรวจสอบว่าพบข้อมูลรายการหรือไม่
    if (!$profile) {
        abort(404);
    }
    return view('dashboardAdmin.indexAdmin', compact('profile'));
}


public function getProfile($id_profile)
{
    $profile = Profile::findOrFail($id_profile);
    // ให้คืนค่า HTML ของโปรไฟล์ผู้ใช้ไปยัง JavaScript
    return response()->json([
        'html' => view('profile_modal', compact('profile'))->render()
    ]);
}







}
