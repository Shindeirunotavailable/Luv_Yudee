<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeEmail;
use App\Mail\ResetPasswordEmail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\login;
use App\Models\createAccount;
use App\Models\resetPassword;
use App\Models\profile;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{


    // public function profliestone(Request $request)
    // {
    //     $id = Auth::id();
    //     $username = $request->input('firstName');
    //     $lastname = $request->input('lastName');
    //     $email = $request->input('email');
    //     $phone = $request->input('phone');
    //     $mobile = $request->input('mobile');
    //     $userId = $request->input('user_id');
    //     $skype = $request->input('skype');
    //     $title = $request->input('title');
    //     $website = $request->input('website');
    //     $linkedin = $request->input('linkedin');
    //     $twitter = $request->input('twitter');
    //     $instagram = $request->input('instagram');
    //     $pinterest = $request->input('pinterest');
    //     $facebook = $request->input('facebook');
    //     $profile = DB::table('profiles')->where('email', $email)->first();
    //     if ($profile) {
    //         DB::table('profiles')->where('email', $email)->update([
    //             'name' => $username,
    //             'lastname' => $lastname,
    //             'phone' => $phone,
    //             'mobile' => $mobile,
    //             'skype' => $skype,
    //             'title' => $title,
    //             'website' => $website,
    //             'linkedin' => $linkedin,
    //             'twitter' => $twitter,
    //             'instagram' => $instagram,
    //             'pinterest' => $pinterest,
    //             'facebook' => $facebook,
    //             'update_by' => $userId,
    //             'create_by' => $id,
    //             'update_datetime' => date('Y-m-d H:i:s'),

    //         ]);
    //     } else {
    //         // ถ้าไม่พบข้อมูลในตาราง profiles ให้ทำการเพิ่มข้อมูลใหม่
    //         DB::table('profiles')->insert([
    //             'name' => $username,
    //             'lastname' => $lastname,
    //             'email' => $email,
    //             'phone' => $phone,
    //             'mobile' => $mobile,
    //             'update_by' => $userId,
    //             'create_datetime' => date('Y-m-d H:i:s'),
    //             'update_datetime' => date('Y-m-d H:i:s'),

    //         ]);
    //     }
    //     return response()->json(['success' => true, 'message' => 'Testajax']);
    // }

    

// public function upload(Request $request)
// {
//     // ตรวจสอบว่ามีไฟล์อัปโหลดมาหรือไม่
//     if ($request->hasFile('imageuser')) {
//         $image = $request->file('imageuser');
//         $imageName = time().'.'.$image->getClientOriginalExtension();
//         $image->move(public_path('assets/imagesUser'), $imageName);

//         // บันทึกชื่อไฟล์รูปภาพลงในฐานข้อมูล
//         $profile = new Profile();
//         $profile->imageuser = $imageName;
//         $profile->save();

//         return redirect('/addproperty');
//     }

//     return redirect('/addproperty');
// }


public function upload(Request $request)
{
        dd($request->all());

        $id = Auth::id();
        $username = $request->input('firstName');
        $lastname = $request->input('lastName');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $mobile = $request->input('mobile');
        $userId = $request->input('user_id');
        $skype = $request->input('skype');
        $title = $request->input('title');
        $website = $request->input('website');
        $linkedin = $request->input('linkedin');
        $twitter = $request->input('twitter');
        $instagram = $request->input('instagram');
        $pinterest = $request->input('pinterest');
        $facebook = $request->input('facebook');
        $fullname =$request->input('nameUser');

    $profile = DB::table('profiles')->where('email', $email)->first();

    if($profile){
        DB::table('users')->where('email', $email)->update([
            'name' => $fullname,
        ]);
    }

    if ($profile) {

        if ($request->hasFile('imageuser')) {
            $image = $request->file('imageuser');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/imagesUser'), $imageName);
            $image_url = '/assets/imagesUser/' . $imageName;

            // อัปเดตฐานข้อมูลรูปภาพ
            DB::table('profiles')->where('email', $email)->update([
                'imageuser' => $image_url,
                'update_datetime' => now(),
            ]);
        }

        // อัปเดตฐานข้อมูลโปรไฟล์
        DB::table('profiles')->where('email', $email)->update([
            'name' => $username,
            'lastname' => $lastname,
            'phone' => $phone,
            'mobile' => $mobile,
            'skype' => $skype,
            'title' => $title,
            'website' => $website,
            'linkedin' => $linkedin,
            'twitter' => $twitter,
            'instagram' => $instagram,
            'pinterest' => $pinterest,
            'facebook' => $facebook,
            'update_by' => $userId,
            'create_by' => $id,
            'update_datetime' => date('Y-m-d H:i:s'),
        ]);
    }
        // return response()->json(['success' => true, 'message' => 'Testajax']);
        return redirect('/addproperty');

}


}
