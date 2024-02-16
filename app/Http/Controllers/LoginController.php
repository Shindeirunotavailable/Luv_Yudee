<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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


    public function register(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $confirmpassword = $request->input('confirmpassword');
    
        $errorMessages = [];
            // ตรวจสอบว่ามีอีเมล์ซ้ำกันในฐานข้อมูลหรือไม่
            $existingUser = DB::table('createaccounts')->where('username', $username)->first();
            if ($existingUser) {
                $errorMessages[] = 'มีผู้ใช้คนนี้อยู่ในระบบอยู่แล้ว';
            } else {
                // บันทึกข้อมูล
                $data = [
                    'username' => $username,
                    'password' => bcrypt($password),
                    'confirmpassword' => bcrypt($confirmpassword),
                ];
                DB::table('createaccounts')->insert($data);
                return redirect('login');
            }
        
        return implode("<br>", $errorMessages);
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

 
public function details(){ 
    return view("details.details");
}

}





