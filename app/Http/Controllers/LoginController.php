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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use PharIo\Manifest\Url;
use Illuminate\Support\Facades\Password;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

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


    // public function loginform(Request $request)
    // {
    //     $account = login::where('email', $request->email)->first();
    //     if ($account && Hash::check($request->password, $account->password)) {
    //         // ล็อกอินสำเร็จ
            
    //         return redirect('/addproperty');
    //     }

    //     return back()->withErrors(['อีเมล์หรือรหัสผ่านไม่ถูกต้อง'])->withInput();
    // }


    // public function loginform(Request $request)
    // {
    //     $account = login::where('email', $request->email)->first();
    //     if ($account && Hash::check($request->password, $account->password)) {
    //         $request->session()->put('user_email', $account->name);
    //         return redirect('/addproperty');
    //     }
    //     else{
    //         $errorMessages = 'อีเมล์หรือรหัสผ่านไม่ถูกต้อง';
    //     }
    
    //     return $errorMessages;
    //     // return back()->with('warning', 'อีเมล์หรือรหัสผ่านไม่ถูกต้อง');

    // }
    
    public function loginform(Request $request)
    {
        $account = Login::where('email', $request->email)->first(); // ค้นหาบัญชีโดยใช้อีเมล
        if ($account && Hash::check($request->password, $account->password)) {
            // ถ้าพบบัญชีและรหัสผ่านถูกต้อง
            $request->session()->put('user_email', $account->name); // เก็บค่าอีเมลของผู้ใช้ใน Session
            return response()->json(['success' => true, 'redirect' => '/addproperty']); // ส่ง JSON กลับไปและระบุ URL ที่ต้องการ redirect
        } else {
            $errorMessages = 'อีเมล์หรือรหัสผ่านไม่ถูกต้อง'; // ถ้าไม่พบบัญชีหรือรหัสผ่านไม่ถูกต้อง
            return response()->json(['success' => false, 'message' => $errorMessages]); // ส่ง JSON กลับไปและระบุข้อความแจ้งเตือน
        }
    }
    
    public function logout(){
        Auth::logout();
        session()->forget('user_email');
        return redirect('/login');
    }

    // ------------------------------------- สมัครสมาชิก -------------------------------------------------


    
    // public function register(Request $request)
    // {
    //     $this->validate($request, [
    //         'modal_email'=>'required',
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
    //     $password = $request->input('modal_password');
    //     $username = $request->input('modal_name');
    //     // รายการข้อผิดพลาด
    //     $errorMessages = [];
    //     $existingUser = createAccount::Getemail($email);

    //     if ($existingUser) {
    //         // ถ้ามีผู้ใช้นี้อยู่ในระบบและ status เป็น 1,2
    //         if ($existingUser->status >= 1) {
    //             $errorMessages[] = 'มีผู้ใช้คนนี้อยู่ในระบบอยู่แล้ว';
    //         }
    //     } else {
    //         // บันทึกข้อมูล
    //         $data = [
    //             'email' => $email,
    //             'name' => $username,
    //             'password' => bcrypt($password),
    //             'create_datetime'=> date('Y-m-d H:i:s'),
    //             'update_datetime'=> date('Y-m-d H:i:s'),

    //         ];
    //         DB::table('user')->insert($data);
    //         // Mail::to($email)->send(new WelcomeEmail());
    //         Mail::to($email)->send(new WelcomeEmail($username));

    //         return back()->with('status', 'สมัครสมาชิกเสร็จสิ้น');

    //     }
    //     return back()->withErrors($errorMessages)->withInput();

    // }

    
        public function register(Request $request){
        $this->validate($request, [
            'modal_email'=>'required',
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
            // ถ้ามีผู้ใช้นี้อยู่ในระบบและ status เป็น 1,2
            if ($existingUser->status >= 1) {
                $errorMessages = 'มีผู้ใช้คนนี้อยู่ในระบบอยู่แล้ว';
                return response()->json(['success' => false, 'messageError' => $errorMessages]); // ส่ง JSON กลับไปและระบุข้อความแจ้งเตือน
            }
        } else {
            // บันทึกข้อมูล
            $data = [
                'email' => $email,
                'name' => $username,
                'password' => bcrypt($password),
                'create_datetime'=> date('Y-m-d H:i:s'),
                'update_datetime'=> date('Y-m-d H:i:s'),
            ];
            DB::table('user')->insert($data);
            // Mail::to($email)->send(new WelcomeEmail());
            Mail::to($email)->send(new WelcomeEmail($username));
            $errorMessages = 'สมัครสมาชิกเสร็จสิ้น';
            return response()->json(['success' => true, 'message' => $errorMessages]); // ส่ง JSON กลับไปและระบุ URL ที่ต้องการ redirect

        }

    }
    // ------------------------------------- ลืมรหัสผ่าน -------------------------------------------------

    public function lostpassword(Request $request)
    {
        $forgetEmail = $request->input('forgetEmail');

        // ค้นหา email ในฐานข้อมูล
        $foundEmail = DB::table('user')->where('email', $forgetEmail)->first();
        if ($foundEmail) {
            // สร้าง token สำหรับการ reset password
            $resetToken = Str::random(60);
            // บันทึก token และเวลาที่สร้างลงในตาราง password_resets
            DB::table('password_resets')->updateOrInsert(
                ['email' => $forgetEmail],
                ['resetToken' => $resetToken, 'created_at' => now()]
            );
            // ส่งอีเมล์ reset password
            Mail::to($forgetEmail)->send(new ResetPasswordEmail($resetToken));
            return back()->with('status', 'ส่งอีเมล์สำหรับกู้รหัสให้แล้ว');


        } else {
            // ถ้าไม่เจอ email ในฐานข้อมูล
            $errorMessages = 'ไม่พบอีเมล์นี้ในระบบ กรุณาลองใหม่อีกครั้ง';
            return response()->json(['success' => true, 'message' => $errorMessages]); // ส่ง JSON กลับไปและระบุ URL ที่ต้องการ redirect
        }
        
    }

    // ---------------------------------------------- หน้า resetPassword -------------------------------------------------

    public function resetPassword(Request $request)
        {
            // ดึงค่า token และ email_token ที่รับมาจากแบบฟอร์ม
            $token = $request->input('resetToken');
            $emailToken = $request->input('email_token');

            // ค้นหาข้อมูลในตาราง password_resets ที่มี token และ email_token ตรงกับที่รับมา
            $passwordReset = DB::table('password_resets')
                                ->where('resetToken', $token)
                                ->first();

            // ตรวจสอบว่าพบข้อมูลหรือไม่
            if ($passwordReset) {
                // ถ้าพบข้อมูล ให้นำอีเมล์ที่ตรงกับ token นี้มาแสดงในฟอร์ม
                $email = $passwordReset->email;
                return view('login.resetPassword', compact('email'));
            } else {
                // ถ้าไม่พบข้อมูล ให้แสดงข้อความแจ้งเตือนหรือดำเนินการต่อตามที่ต้องการ
                return view('login.login')->with('error', 'Invalid token or email token.');
            }
        }

        
    public function resetPassword1(Request $request)
    {
        // dd($request->all());
        // ตรวจสอบความถูกต้องของอีเมล์
    
        // ค้นหาผู้ใช้จากอีเมล์
        $user = createAccount::Getemail($request->email);

        // dd($user);
        if ($user) {
            createAccount::editPassword($request->email,bcrypt($request->password));
            return view('login.login');

        } 
            else {
            $errorMessages = 'User not found.';
            return response()->json(['success' => false, 'messageError' => $errorMessages]); // ส่ง JSON กลับไปและระบุข้อความแจ้งเตือน

        }
    }
    

  

    // // ---------------------------------------------- หน้า Content -------------------------------------------------


    public function contact()
    { //แสดงหน้า content
        return view("contact.contact")->with('main', $this->ContenrCss);
    }


    public function contentstone(Request $request)
    {
        $email = $request->input('email');
        $email = DB::table('createaccounts')->where('Username', $email)->first();
        if ($email) {
            // ถ้าเจอ email ในฐานข้อมูล
            $data = [
                'name' => $request->name,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'textarea' => $request->textarea
            ];
            DB::table('contents')->insert($data);
            return redirect('/content');
        } else {
            // ถ้าไม่เจอ email ในฐานข้อมูล
            $errorMessages = 'ไม่พบอีเมล์หรือผู้ใช้งานในระบบ';
            return redirect('/content')->with('errorMessages', $errorMessages);
        }
    }



    // ---------------------------------------------- หน้า Details -------------------------------------------------


    public function search_result()
    {
        return view("searchResult.searchResult");
    }



}

