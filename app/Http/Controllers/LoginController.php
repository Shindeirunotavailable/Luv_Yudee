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

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use PharIo\Manifest\Url;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
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


    public function loginform(Request $request)
    {
        $account = Login::where('email', $request->email)->first(); // ค้นหาบัญชีโดยใช้อีเมล
        if ($account && Hash::check($request->password, $account->password)) {
            // ถ้าพบบัญชีและรหัสผ่านถูกต้อง
            Auth::login($account);
            // $request->session()->put('user_name', $account->name); // เก็บค่าอีเมลของผู้ใช้ใน Session
            // $request->session()->put('user_email', $account->email); // เก็บค่าอีเมลของผู้ใช้ใน Session

            $request->session()->put([
                'user_name' => $account->name,
                'user_email' => $account->email
            ]);

            return response()->json(['success' => true, 'redirect' =>'/addproperty']); // ส่ง JSON กลับไปและระบุ URL ที่ต้องการ redirect
        } else {
            $errorMessages = 'อีเมล์หรือรหัสผ่านไม่ถูกต้อง'; // ถ้าไม่พบบัญชีหรือรหัสผ่านไม่ถูกต้อง
            return response()->json(['success' => false, 'message' => $errorMessages]); // ส่ง JSON กลับไปและระบุข้อความแจ้งเตือน
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->forget('user_name');
        return redirect()->route('login');
    }



    // ------------------------------------- สมัครสมาชิก -------------------------------------------------



    public function register(Request $request)
    {
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
                'create_datetime' => date('Y-m-d H:i:s'),
                'update_datetime' => date('Y-m-d H:i:s'),
            ];
            DB::table('users')->insert($data);
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
        $foundEmail = DB::table('users')->where('email', $forgetEmail)->first();

        // $existingUser = resetPassword::GetEmailRestPassword($request->email);

        // if ($existingUser) {
        //     $resetToken = Str::random(60);

        //     // ถ้ามีผู้ใช้นี้อยู่ในระบบและ status เป็น 1,2
        //     if ($existingUser->status = 0) {
        //         $data = [
        //             'email' => $forgetEmail,
        //             'resetToken' => $resetToken,
        //             'create_datetime' => now(),
        //             'update_datetime' => now(),
                   
        //         ];
        //         DB::table('password_resets')->insert($data);
        //     }
        // } 

        if ($foundEmail) {
            // สร้าง token สำหรับการ reset password
            $resetToken = Str::random(60);
            // บันทึก token และเวลาที่สร้างลงในตาราง password_resets
            DB::table('password_resets')->updateOrInsert(
                ['email' => $forgetEmail],
                [
                    'resetToken' => $resetToken,
                    'create_datetime' => now(),
                    'update_datetime' => now(),
                ]
            );
            // ส่งอีเมล์ reset password
            Mail::to($forgetEmail)->send(new ResetPasswordEmail($resetToken));
            $errorMessage = "ส่งอีเมล์สำเร็จ";
            return response()->json(['success' => true, 'message' => $errorMessage]);
        } else {
            // ถ้าไม่เจอ email ในฐานข้อมูล
            $errorMessage = "ไม่พบอีเมล์นี้ในระบบ กรุณาลองใหม่อีกครั้ง";
            return response()->json(['success' => false, 'messageError' => $errorMessage]);
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
                            ->where('create_datetime', '>=', now()->subMinutes(30))
                            ->first();

        // ตรวจสอบว่าพบข้อมูลหรือไม่
        if ($passwordReset) {
            // ถ้าพบข้อมูล ให้นำอีเมล์ที่ตรงกับ token นี้มาแสดงในฟอร์ม
            $email = $passwordReset->email;
            return view('login.resetpassword', compact('email'));
        } else {
            // ถ้าไม่พบข้อมูล ให้แสดงข้อความแจ้งเตือนหรือดำเนินการต่อตามที่ต้องการ
            // return view('login.login')->with('error', 'Invalid token or email token.');
            return redirect()->route('login')->with('error', 'เกินเวลาที่กำหนดกรุณากรอกขอรหัสผ่านใหม่');;
        }
    }


    public function newPassword(Request $request)
    {
        // $foundEmail = DB::table('user')->where('email', $request->email)->first();
        $foundEmail = resetPassword::GetEmailRestPassword($request->email);

        if ($foundEmail) {
            $data = [
                'status' => "1",
                'update_datetime' => date('Y-m-d H:i:s'),
            ];
            resetPassword::modelresetPassword($data, $request->email);
        }
        // dd($foundEmail,$foundEmail->id_password_reset,$foundEmail->status);

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
