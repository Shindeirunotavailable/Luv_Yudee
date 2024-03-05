<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\WelcomeEmail;
use App\Mail\RegisterPassword;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\login;
use Illuminate\Support\Facades\Hash;

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
        $this->loginCss= ['main', 'login']; // ดึง LoginCss
        $this->ContenrCss= ['main', 'content/content']; // ดึง ContenrCss
    }

    public function login(){ //แสดงหน้า modal สร้างรหัสผ่าน
        return view("login.login")->with('main',$this->loginCss);
    }
    
    public function createAccount(){ //แสดงหน้า modal สร้างรหัสผ่าน
        return view("login.createAccount");
    }

    public function forgetPassword(){ // แสดงหน้า modal ลืมรหัสผ่าน
        return view("login.forgetPassword");
        
    }

    public function emails(){ // แสดงหน้า modal ลืมรหัสผ่าน
        return view("emails");
        
    }

// ------------------------------------- เข้าสู่ระบบ -------------------------------------------------


    public function loginform(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'g-recaptcha-response' => 'required',
        ]);

        $errorMessages = [];
        if (!$request->filled('g-recaptcha-response')) {
            // ถ้าไม่มีค่า g-recaptcha-response
            $errorMessages[] = "ไม่มี reCAPTCHA";
        }
        
        $account = login::where('email', $request->email)->first();
        if ($account && Hash::check($request->password, $account->password)) {
            // ล็อกอินสำเร็จ
            return redirect('/addproperty');
        } 
        else {
            // ล็อกอินไม่สำเร็จ
            $errorMessages[] = "อีเมล์หรือรหัสผ่านไม่ถูกต้อง";

        }
        return back()->withErrors($errorMessages)->withInput();

    }

// ------------------------------------- สมัครสมาชิก -------------------------------------------------


    public function register(Request $request){
        
    $request->validate([ 'g-recaptcha-response' => 'required',]);
    // รับข้อมูลจาก request
    $username = $request->input('modal_email');
    $password = $request->input('modal_password');
    
    // ตรวจสอบว่ามีอีเมล์ที่ซ้ำกันในฐานข้อมูลหรือไม่
    $existingUser = DB::table('create_accounts')->where('email', $username)->first();
    // รายการข้อผิดพลาด
    $errorMessages = [];
    if (!$request->filled('g-recaptcha-response')) {
        // ถ้าไม่มีค่า g-recaptcha-response
        $errorMessages[] = "ไม่มี reCAPTCHA";
    }

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
        ];
        DB::table('create_accounts')->insert($data);
        // ส่งผู้ใช้ไปยังหน้า searchResult.searchResult
        Mail::to($username)->send(new WelcomeEmail());
        // return view("searchResult.searchResult");
        return redirect('/addproperty');
    }
    return back()->withErrors($errorMessages)->withInput();
}

// ------------------------------------- ลืมรหัสผ่าน -------------------------------------------------

public function lostpassword(Request $request){ 
    $forgetEmail = $request->input('forgetEmail');

    // ค้นหา email ในฐานข้อมูล
    $foundEmail = DB::table('create_accounts')->where('email', $forgetEmail)->first();
    $errorMessages = [];
    if ($foundEmail) {
        Mail::to($forgetEmail)->send(new WelcomeEmail  ());
        return redirect('/login');
    } else {
        // ถ้าไม่เจอ email ในฐานข้อมูล
        $errorMessages = 'ไม่พบอีเมล์นี้ในระบบ กรุณาลองใหม่อีกครั้ง';
    }

    return $errorMessages;
}


    

// ---------------------------------------------- หน้า Content -------------------------------------------------

 
public function contact(){ //แสดงหน้า content
    return view("contact.contact")->with('main',$this->ContenrCss);
}
 

    public function contentstone (Request $request){
        $email = $request->input('email');
            $email = DB::table('createaccounts')->where('Username', $email)->first();
            if ($email) {
                // ถ้าเจอ email ในฐานข้อมูล
                $data=[
                    'name'=>$request->name,
                    'lastname'=>$request->lastname,
                    'email'=>$request->email,
                    'textarea'=>$request->textarea
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

 
public function search_result(){ 
    return view("searchResult.searchResult");
}

}





