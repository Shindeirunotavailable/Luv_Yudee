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
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;


class LoginController extends Controller
{

    // public function __construct()
    // {
    //     // $this->middleware['css'] = ['login'];
    //     $this->middleware('log')->only('login');
    //     $ttt['ate'] = NULL;

    // }
    public $loginCss;
    public $ContenrCss;

    public function __construct()
    {
        $this->loginCss = ['main', 'login']; // ดึง LoginCss
        $this->ContenrCss = ['main', 'content/content']; // ดึง ContenrCss
    }

    public function login()
    { //แสดงหน้า modal สร้างรหัสผ่าน
        return view("login.login")->with('main', $this->loginCss);
    }

    public function createAccount()
    { //แสดงหน้า modal สร้างรหัสผ่าน
        return view("login.createAccount");
    }

    public function forgetPassword()
    { // แสดงหน้า modal ลืมรหัสผ่าน
        return view("login.forgetPassword");
    }


    // ------------------------------------- เข้าสู่ระบบ -------------------------------------------------


    public function loginform(Request $request){
        $account = Login::where('email', $request->email)->first(); // ค้นหาบัญชีโดยใช้อีเมล
        if ($account && Hash::check($request->password, $account->password)) {
            // ถ้าพบบัญชีและรหัสผ่านถูกต้อง
            Auth::login($account);
            $request->session()->put([
                'user_name' => $account->name,
                'user_email' => $account->email,
                'user_id' => $account->id,
            ]);

            // เช็คว่าเป็นแอดมินหรือไม่
            if ($account->Isadmin == 1) {
                return response()->json(['success' => true, 'redirect' => '/indexadmin']); // ส่ง JSON กลับไปและระบุ URL ที่ต้องการ redirect
            } else {
                return response()->json(['success' => true, 'redirect' => '/addproperty']); // ส่ง JSON กลับไปและระบุ URL ที่ต้องการ redirect
            }
        } else {
            $errorMessages = 'อีเมล์หรือรหัสผ่านไม่ถูกต้อง'; // ถ้าไม่พบบัญชีหรือรหัสผ่านไม่ถูกต้อง
            return response()->json(['success' => false, 'message' => $errorMessages]); // ส่ง JSON กลับไปและระบุข้อความแจ้งเตือน
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->forget('user_name');
        session()->forget('user_email');
        return redirect()->route('login');
    }



    // ------------------------------------- สมัครสมาชิก -------------------------------------------------



    // public function register(Request $request)
    // {
    //     //recaptcha
    //     $this->validate($request, [
    //         'modal_email' => 'required',
    //         'g-recaptcha-response' => ['required', function ($attribute, $value, $fail) {
    //             $g_recaptcha = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
    //                 'secret' => config('services.recaptcha.secret_key'),
    //                 'response' => $value,
    //                 'remoteip' => \request()->ip()
    //             ]);
    //             $g_recaptcha_result = $g_recaptcha->json();
    //             if (!$g_recaptcha_result['success']) {
    //                 $fail("The {$attribute} is invalid.");
    //             }
    //         },]
    //     ]);

    //     // รับข้อมูลจาก request
    //     $email = $request->input('modal_email');
    //     $password = $request->input('modal_        password');
    //     $username = $request->input('modal_name');
    //     $existingUser = createAccount::Getemail($email);
    //     if ($existingUser) {
    //         // ถ้ามีผู้ใช้นี้อยู่ในระบบและ status เป็น 1,2
    //         if ($existingUser->status >= 1) {
    //             $errorMessages = 'มีผู้ใช้คนนี้อยู่ในระบบอยู่แล้ว';
    //             return response()->json(['success' => false, 'messageError' => $errorMessages]); // ส่ง JSON กลับไปและระบุข้อความแจ้งเตือน
    //         }
    //     } else {
    //         // บันทึกข้อมูล
    //         $data = [
    //             'email' => $email,
    //             'name' => $username,
    //             'password' => bcrypt($password),
    //             'create_datetime' => date('Y-m-d H:i:s'),
    //             'update_datetime' => date('Y-m-d H:i:s'),
    //         ];
    //         $userId = DB::table('users')->insertGetId($data); // เพิ่มและรับค่า id ที่เพิ่มลงในฐานข้อมูล

    //         $profileData = [
    //             'email' => $email,
    //             'name' => $username,
    //             'create_by' => $userId, // ใช้ id ของผู้ใช้ที่เพิ่มไปลงในฐานข้อมูล
    //             'create_datetime' => date('Y-m-d H:i:s'),
    //             'update_datetime' => date('Y-m-d H:i:s'),
    //         ];
    //         DB::table('profiles')->insert($profileData);
    //         Mail::to($email)->send(new WelcomeEmail($username));
    //         $errorMessages = 'สมัครสมาชิกเสร็จสิ้น';
    //         return response()->json( ['success' => true, 'message' => $errorMessages]); // ส่ง JSON กลับไปและระบุ URL ที่ต้องการ redirect
    //     }
    // }


public function register(Request $request)
{
    //recaptcha
    $this->validate($request, [
        'modal_email' => 'required',
        'g-recaptcha-response' => ['required', function ($attribute, $value, $fail) {
            $g_recaptcha = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
                'secret' => config('services.recaptcha.secret_key'),
                'response' => $value,
                'remoteip' => \request()->ip()
            ]);
            $g_recaptcha_result = $g_recaptcha->json();
            if (!$g_recaptcha_result['success']) {
                $fail("The {$attribute} is invalid.");
            }
        },]
    ]);

    // รับข้อมูลจาก request
    $email = $request->input('modal_email');
    $password = $request->input('modal_password');
    $username = $request->input('modal_name');
    $existingUser = createAccount::Getemail($email);
    if ($existingUser) {
        if ($existingUser->status >= 1) {
            $errorMessages = 'มีผู้ใช้คนนี้อยู่ในระบบอยู่แล้ว';
            return response()->json(['success' => false, 'messageError' => $errorMessages]); // ส่ง JSON กลับไปและระบุข้อความแจ้งเตือน
        }
    } else {
        // สร้างและเก็บ token สำหรับการยืนยันอีเมล์
        $token = Str::random(60);
        // บันทึกข้อมูลผู้ใช้
        $data = [
            'email' => $email,
            'name' => $username,
            'password' => bcrypt($password),
            'create_datetime' => now(),
            'update_datetime' => now(),
            'remember_token' => $token, // เพิ่มการกำหนดค่า token
        ];
        $userId = DB::table('users')->insertGetId($data); // เพิ่มและรับค่า id ที่เพิ่มลงในฐานข้อมูล

        // บันทึกข้อมูลโปรไฟล์
        $profileData = [
            'email' => $email,
            'name' => $username,
            'create_by' => $userId,
            'create_datetime' => now(),
            'update_datetime' => now(),
        ];
        DB::table('profiles')->insert($profileData);
        // ส่งอีเมล์ยืนยัน
        Mail::to($email)->send(new WelcomeEmail($username, $token));
        $errorMessages = 'สมัครสมาชิกเสร็จสิ้น';
        return response()->json(['success' => true, 'message' => $errorMessages]); // ส่ง JSON กลับไปและระบุ URL ที่ต้องการ redirect
    }
}


public function verifyEmail($token)
{
    // ค้นหาข้อมูลผู้ใช้จาก token
    $user = login::where('remember_token', $token)->first();

    if ($user) {
        // อัปเดตสถานะของผู้ใช้เป็น 2
        $user->status = 2;
        $user->update_datetime = now(); // อัปเดตเวลาอัปเดตเป็นปัจจุบัน
        $user->save();

        // ทำสิ่งที่คุณต้องการหลังจากการยืนยันอีเมล์ เช่น     redirect หน้าไปยังหน้าแรก
         return redirect()->route('login')->with('success', 'ยืนยันอีเมล์สำเร็จแล้ว');

    } else {
        // หากไม่พบผู้ใช้ ทำสิ่งที่คุณต้องการ เช่น redir    ect ไปยังหน้าที่ต้องการ
        return redirect()->route('login')->with('error', 'ไม่สามารถยืนยันอีเมล์ได้');

    }
}



    // ------------------------------------- ลืมรหัสผ่าน -------------------------------------------------


    // public function lostpassword(Request $request)
    // {
    //     $forgetEmail = $request->input('forgetEmail');
    //     $foundEmail = DB::table('users')->where('email', $forgetEmail)->first();
    //     if ($foundEmail) {
    //         // สร้าง token สำหรับการ reset password
    //         $resetToken = Str::random(60);
    //         DB::table('password_resets')->updateOrInsert(
    //             ['email' => $forgetEmail],
    //             [
    //                 'resetToken' => $resetToken,
    //                 'create_datetime' => now(),
    //                 'update_datetime' => now(),
    //                 'status' => 1,
    //             ]
    //         );
    //         // ส่งอีเมล์ reset password
    //         Mail::to($forgetEmail)->send(new ResetPasswordEmail($resetToken));
    //         $errorMessage = "ส่งอีเมล์สำเร็จ";
    //         return response()->json(['success' => true, 'message' => $errorMessage]);
    //     } else {
    //         // ถ้าไม่เจอ email ในฐานข้อมูล
    //         $errorMessage = "ไม่พบอีเมล์นี้ในระบบ กรุณาลองใหม่อีกครั้ง";
    //         return response()->json(['success' => false, 'messageError' => $errorMessage]);
    //     }
    // }

    public function lostpassword(Request $request)
    {
        $forgetEmail = $request->input('forgetEmail');

        // ค้นหาอีเมล์ในตาราง 'users'
        $foundEmail = DB::table('users')->where('email', $forgetEmail)->first();
        $found = DB::table('password_resets')->where([['email', $forgetEmail], ['status', 1]])->first();

        if ($foundEmail) {
            // สร้าง token สำหรับการ reset password
            $resetToken = Str::random(60);
            // ตรวจสอบค่า status
            if (!isset($found)) {
                // ถ้า status เป็น 0 ให้ทำการ insert ข้อมูลใหม่ลงในฐานข้อมูล
                DB::table('password_resets')->insert([
                    'email' => $forgetEmail,
                    'resetToken' => $resetToken,
                    'create_datetime' => now(),
                    'update_datetime' => now(),
                    'status' => 1,
                ]);
            } else {
                // ถ้า status เป็น 1 ให้ทำการ updateOrInsert ข้อมูล
                DB::table('password_resets')->updateOrInsert(
                    ['email' => $forgetEmail],
                    [
                        'resetToken' => $resetToken,
                        'create_datetime' => now(),
                        'update_datetime' => now(),
                        'status' => 1,
                    ]
                );
            }

            // ส่งอีเมล์ reset password
            Mail::to($forgetEmail)->send(new ResetPasswordEmail($resetToken));
            $errorMessage = "ส่งอีเมล์สำเร็จ";
            return response()->json(['success' => true, 'message' => $errorMessage]);
        } else {
            // ถ้าไม่พบอีเมล์ในฐานข้อมูล
            $errorMessage = "ไม่พบอีเมล์นี้ในระบบ กรุณาลองใหม่อีกครั้ง";
            return response()->json(['success' => false, 'messageError' => $errorMessage]);
        }
    }

    // ---------------------------------------------- หน้า resetPassword -------------------------------------------------

    // public function resetPassword(Request $request)
    // {
    //     // ดึงค่า token และ email_token ที่รับมาจากแบบฟอร์ม
    //     $token = $request->input('resetToken');
    //     $emailToken = $request->input('email_token');
    //     // ค้นหาข้อมูลในตาราง password_resets ที่มี token และ email_token ตรงกับที่รับมา
    //     $passwordReset = DB::table('password_resets')
    //                         ->where('resetToken', $token)
    //                         ->where('create_datetime', '>=', now()->subMinutes(1))
    //                         ->first();

    //     $foundEmail = DB::table('password_resets')->where('email', $request->emailToken)->first();

    //     // ตรวจสอบว่าพบข้อมูลหรือไม่
    //     if ($passwordReset) {
    //         // ถ้าพบข้อมูล ให้นำอีเมล์ที่ตรงกับ token นี้มาแสดงในฟอร์ม
    //         $email = $passwordReset->email;
    //         return view('login.resetpassword', compact('email'));
    //     } else{
    //         return redirect()->route('login')->with('error', 'เกินเวลาที่กำหนดกรุณากรอกขอรหัสผ่านใหม่');

    //     }
    // }

    public function resetPassword(Request $request)
    {
        // ดึงค่า token และ email_token ที่รับมาจากแบบฟอร์ม
        $token = $request->input('resetToken');
        $emailToken = $request->input('email_token');

        // ค้นหาข้อมูลในตาราง password_resets ที่มี token และ email_token ตรงกับที่รับมา
        $passwordReset = DB::table('password_resets')
            ->where('resetToken', $token)
            ->where('create_datetime', '>=', now()->subMinutes(30))
            ->first();

        // ตรวจสอบว่าพบข้อมูลที่ตรงกับ token หรือไม่
        if ($passwordReset) {
            // ถ้าพบข้อมูล ให้นำอีเมล์ที่ตรงกับ token นี้มาแสดงในฟอร์ม
            $email = $passwordReset->email;
            return view('login.resetpassword', compact('email'));
        } else {
            // ถ้าไม่พบ token หรือเกินเวลาที่กำหนด ให้ทำการอัพเดต status เป็น 0
            DB::table('password_resets')
                ->where('resetToken', $token)
                ->update(['status' => 0, 'update_datetime' => now()]);

            // ทำการ redirect ไปยังหน้า login พร้อมส่งข้อความแจ้งเตือน
            return redirect()->route('login')->with('error', 'เกินเวลาที่กำหนดกรุณากรอกขอรหัสผ่านใหม่');
        }
    }



    public function newPassword(Request $request)
    {
        // dd($request->all());

        // $foundEmail = DB::table('user')->where('email', $request->email)->first();
        $foundEmail = resetPassword::GetEmailRestPassword($request->email);
        if ($foundEmail) {
            $data = [
                'status' => "0",
                'update_datetime' => date('Y-m-d H:i:s'),
            ];
            resetPassword::modelresetPassword($data, $request->email);
        }


        $user = createAccount::Getemail($request->email);
        if ($user) {
            $data = [
                'password' => bcrypt($request->password),
                'update_by' => $user->id,
                'update_datetime' => date('Y-m-d H:i:s'),
            ];

            createAccount::editPassword($data, $request->email);
            return redirect()->route('login');
        } else {
            $errorMessages = 'User not found.';
            return response()->json(['success' => false, 'messageError' => $errorMessages]); // ส่ง JSON กลับไปและระบุข้อความแจ้งเตือน

        }
    }





    // // ---------------------------------------------- หน้า Content -------------------------------------------------


    public function contact()
    {
        return view("contact.contact");
    }

    public function contentstone(Request $request)
    {
        // dd($request->all());
        $username = $request->input('firstName');
        $lastname = $request->input('lastName');
        $email = $request->input('contactEmail');
        $description = $request->input('description');

        $existingUser = createAccount::Getemail($email);
        if ($existingUser) {
            $data = [
                'name' => $username,
                'lastname' => $lastname,
                'email' => $email,
                'description' => $description,
                'create_datetime' => date('Y-m-d H:i:s'),
                'update_datetime' => date('Y-m-d H:i:s'),
            ];
            DB::table('contacts')->insert($data);
            return redirect('/contact')->with('status', 'เรียบร้อย');
        } else {
            return redirect('/contact')->with('error', 'ไม่พบอีเมล์หรือผู้ใช้งานในระบบ');
        }
    }
    // ---------------------------------------------- หน้า profile -------------------------------------------------


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

        // if ($request->hasFile('imageuser')) {
        //     $image = $request->file('imageuser');
        //     $imageName = time() . '_' . $image->getClientOriginalName();
        //     $image->move(public_path('assets/imagesUser'), $imageName);
        //     $image_url = '/assets/imagesUser/' . $imageName;

        //     // อัปเดตฐานข้อมูลรูปภาพ
        //     DB::table('profiles')->where('email', $email)->update([
        //         'imageuser' => $image_url,
        //         'update_datetime' => now(),
        //     ]);

        // }

        if (!empty($profile->imageuser)) {
            $oldImage = public_path($profile->imageuser);
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
        }

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
    } else {
        // ถ้าไม่พบข้อมูลในตาราง profiles ให้ทำการเพิ่มข้อมูลใหม่
        DB::table('profiles')->insert([
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





    // ---------------------------------------------- หน้า Details -------------------------------------------------


    public function search_result()
    {
        $blogs = DB::table('pp_properties')
            ->join('pp_media', 'pp_properties.id_property', '=', 'pp_media.id_property')
            ->get();
        $provinces = DB::table('provinces')->get();
        $amphures = DB::table('amphures')->get();
        $districts = DB::table('districts')->get();
        $pp_amenities = DB::table('pp_amenities')->get();

        return view("searchResult.searchResult")->with([
            'blogs' => $blogs,
            'provinces' => $provinces,
            'amphures' => $amphures,
            'districts' => $districts,
            'pp_amenities' => $pp_amenities,
        ]);

    }

    public function test()
    {
        return view("test");
    }

}
