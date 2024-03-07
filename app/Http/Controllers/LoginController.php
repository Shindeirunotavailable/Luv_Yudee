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
use App\Rules\ReCaptchaV3;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use PharIo\Manifest\Url;
use Closure;

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


    public function loginform(Request $request)
    {
        $account = login::where('email', $request->email)->first();
        if ($account && Hash::check($request->password, $account->password)) {
            // ล็อกอินสำเร็จ
            return redirect('/addproperty');
        }

        return back()->withErrors(['อีเมล์หรือรหัสผ่านไม่ถูกต้อง'])->withInput();
    }

    // ------------------------------------- สมัครสมาชิก -------------------------------------------------


    // public function register(Request $request)
    // {
    //     // รับข้อมูลจาก request
    //     $username = $request->input('modal_email');
    //     $password = $request->input('modal_password');
    //     // รายการข้อผิดพลาด
    //     $errorMessages = [];
    //     $existingUser = createAccount::Getemail($username);

    //     if ($existingUser) {
    //         // ถ้ามีผู้ใช้นี้อยู่ในระบบและ status เป็น 1,2
    //         if ($existingUser->status >= 1) {
    //             $errorMessages[] = 'มีผู้ใช้คนนี้อยู่ในระบบอยู่แล้ว';
    //         }
    //     } else {
    //         // บันทึกข้อมูล
    //         $data = [
    //             'email' => $username,
    //             'password' => bcrypt($password),
    //             'create_datetime'=> date('Y-m-d H:i:s'),
    //             'update_datetime'=> date('Y-m-d H:i:s'),

    //         ];
    //         DB::table('user')->insert($data);
    //         Mail::to($username)->send(new WelcomeEmail());
    //         return redirect('/addproperty');
    //     }
    //     return back()->withErrors($errorMessages)->withInput();
    // }


    
    public function register(Request $request)
    {
        $this->validate($request, [
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
        $username = $request->input('modal_email');
        $password = $request->input('modal_password');
        // รายการข้อผิดพลาด
        $errorMessages = [];
        $existingUser = createAccount::Getemail($username);

        if ($existingUser) {
            // ถ้ามีผู้ใช้นี้อยู่ในระบบและ status เป็น 1,2
            if ($existingUser->status >= 1) {
                $errorMessages[] = 'มีผู้ใช้คนนี้อยู่ในระบบอยู่แล้ว';
            }
        } else {
            // บันทึกข้อมูล
            $data = [
                'email' => $username,
                'password' => bcrypt($password),
                'create_datetime'=> date('Y-m-d H:i:s'),
                'update_datetime'=> date('Y-m-d H:i:s'),

            ];
            DB::table('user')->insert($data);
            Mail::to($username)->send(new WelcomeEmail());
            return redirect('/addproperty');
        }
        return back()->withErrors($errorMessages)->withInput();
    }




    // ------------------------------------- ลืมรหัสผ่าน -------------------------------------------------

    public function lostpassword(Request $request)
    {
        $forgetEmail = $request->input('forgetEmail');

        // ค้นหา email ในฐานข้อมูล
        $foundEmail = DB::table('user')->where('email', $forgetEmail)->first();
        $errorMessages = [];

        if ($foundEmail) {
            // สร้าง token สำหรับการ reset password
            $resetToken = Str::random(60);
            // บันทึก token และเวลาที่สร้างลงในตาราง password_resets
            DB::table('password_resets')->updateOrInsert(
                ['email' => $forgetEmail],
                // ['token' => bcrypt($resetToken), 'created_by' => date('Y-m-d H:i:s')]
                ['token' => bcrypt($resetToken)]

            );

            // ส่งอีเมล์ reset password
            Mail::to($forgetEmail)->send(new ResetPasswordEmail($resetToken));

            $errorMessages[] = 'ส่งอีเมล์สำหรับกู้รหัสให้แล้ว';
        } else {
            // ถ้าไม่เจอ email ในฐานข้อมูล
            $errorMessages[]  = 'ไม่พบอีเมล์นี้ในระบบ กรุณาลองใหม่อีกครั้ง';
        }

        return back()->withErrors($errorMessages)->withInput();
    }


    // ---------------------------------------------- หน้า Content -------------------------------------------------


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






    ////////////////////////////////// recaptcha ///////////////////////////////////////////////


    // public function register(Request $request){

    //     $request->validate([ 
    //         'modal_email'=>'required',
                
    //         'g-recaptcha-response' => 'required',function (string $attribute, mixed $value, Closure $fail) {
    //             $g_recaptcha = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify",[
    //                 'secret' => config('services.recaptcha.secret_key'),
    //                 'response' => $value,
    //                 'remoteip' => \request()->ip()
    //             ]);
    //             dd($g_recaptcha->json());

    //             if ($value === 'foo') {
    //             }
    //         },
    //     ]);

   

    // }

 


    // public function register(Request $request)
    // {
    //     $this->validate($request, [
    //         'g-recaptcha-response' => ['required',function (string $attribute, mixed $value, Closure $fail) {
    //             $g_recaptcha = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify",[
    //                 'secret' =>config('services.recaptcha.secret_key'),
    //                 'response' =>$value,
    //                 'remoteip'=>\request()->ip()
    //             ]);

    //             dd($g_recaptcha->json());

    //             if ($value === 'foo') {
    //                 $fail("The {$attribute} is invalid.");
    //             }
    //         },]
    //     ]);


    //     // RecaptCha V3 and other rules have passed, safe to continue

    //     // Here you can add code to actually send the email message

    // }


    

}

