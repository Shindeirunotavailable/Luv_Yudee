<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;


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

// ------------------------------------- สมัครสมาชิก -------------------------------------------------

    // public function register(Request $request)
    // {
    //     $username = $request->input('modal_email');
    //     $password = $request->input('modal_password');
    
    //     $errorMessages = [];
    //         // ตรวจสอบว่ามีอีเมล์ซ้ำกันในฐานข้อมูลหรือไม่
    //         $existingUser = DB::table('create_accounts')->where('status', 1)->first();
    //         if ($existingUser) {
    //             $errorMessages[] = 'มีผู้ใช้คนนี้อยู่ในระบบอยู่แล้ว';
    //         } 
    //         else {
    //             // บันทึกข้อมูล
    //             $data = [
    //                 'modal_email' => $username,
    //                 'modal_password' => bcrypt($password),
    //             ];
    //             DB::table('create_accounts')->insert($data);
    //             return view('searchResult.searchResult');
    //         }
        
    //     // return $errorMessages;
    //     dd($errorMessages);
    //     return back()->withErrors($errorMessages)->withInput();
    // }



    public function register(Request $request){
    // รับข้อมูลจาก request
    $username = $request->input('modal_email');
    $password = $request->input('modal_password');
    // ตรวจสอบว่ามีอีเมล์ที่ซ้ำกันในฐานข้อมูลหรือไม่
    $existingUser = DB::table('create_accounts')->where('email', $username)->first();
    // รายการข้อผิดพลาด
    $errorMessages = [];
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
        $email = $request->input('email');
    
        if (empty($email)) {
            // ถ้า email เป็นค่าว่าง
            return 'กรุณากรอกข้อมูล';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // ถ้า email ไม่ถูกต้อง
            return 'กรุณากรอก E-mail ในรูปแบบที่ถูกต้อง';
        } else {
            // ถ้ามี email ส่งมาและถูกต้อง
            $email = DB::table('createaccounts')->where('Username', $email)->first();
            if ($email) {
                // ถ้าเจอ email ในฐานข้อมูล
                return '<script>window.location.href = window.location.href;</script>';
            } else {
                // ถ้าไม่เจอ email ในฐานข้อมูล
                return 'ไม่พบอีเมล์นี้ในระบบกรุณาลองใหม่อีกครั้ง';
            }
        }
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





