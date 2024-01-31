<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function home(){
        return view("home.home");
    }
    public function hometest(){
        return view("home.hometest");
    }
    public function test(){
        return view("home.test");
    }
    public function non(){
        return view("home.non");
    }
    public function slider(){
        return view("home.slider");
    }
    public function details(){
        return view("home.details");
    }

    public function createaccount(){ //แสดงหน้า modal สร้างรหัสผ่าน
        return view("modal.createaccount");
    }

    public function Forgetpassword(){ // แสดงหน้า modal ลืมรหัสผ่าน
        return view("modal.Forgetpassword");
        
    }
    // ------------------------------------- หน้าเข้าสู่ระบบ -------------------

    // public function login (Request $request){ 
        // $request->validate(
        //     [
        //         'Email'=>'required | Email',
        //         'Password'=>'required'
        //     ],
        //     [
        //         'Email.required'=>'กรุณากรอก Email ที่ถูกต้อง',
        //         'Email.email'=>'กรุณากรอกรูปแบบ Email ทีถูกต้อง',
        //         'Password.required'=>'กรุณากรอก Password '
        //     ]
        // );
    //    return redirect('/content');
    // }

    // public function login (Request $request){
    //     $credetials = [
    //         'Email'=>request->email,
    //         'Password'=>request->password,
    //     ];
    // }


// ---------------------------- สร้างรหัสผ่าน -----------------------------------------------------

 // public function register(Request $request){ // สมัครสมาชิก
    //     $username = $request->input('username');
    //     $password = $request->input('password');
    //     $confirmpassword = $request->input('confirmpassword');
    
    //     if (empty($username) || empty($password) || empty($confirmpassword)) {
    //         // ถ้ามีค่าว่าง
    //         // return 'กรุณากรอกข้อมูลให้ครบทุกช่อง';
    //         $errorMessage = 'กรุณากรอกข้อมูลให้ครบทุกช่อง';

    //     } elseif ($password != $confirmpassword) {
    //         // ถ้ารหัสผ่านไม่ตรงกัน
    //         $errorMessage ='รหัสผ่านไม่ตรงกัน';
    //     }
    //     elseif (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    //         // ถ้า email ไม่ถูกต้อง
    //         $errorMessage ='กรุณากรอก E-mail ในรูปแบบที่ถูกต้อง';
    //     } 
    //     else {
    //         // ถ้ามี email ส่งมาและถูกต้อง
    //         $data = [
    //             'username' => $request->username,
    //             'password' => bcrypt($request->password),  // เข้ารหัสรหัสผ่านก่อนบันทึก
    //             'confirmpassword' => bcrypt($request->confirmpassword)
    //         ];
    //         DB::table('createaccounts')->insert($data);
    //         return '<script>window.location.href = window.location.href;</script>';
    //     }
    //     return $errorMessage; // return ค่า

    // }
    

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

    
public function indextcontent(){ // แสดงหน้า modal ลืมรหัสผ่าน
    return view("home.content");
    
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
    // public function slider(){
    //     return view("home.slider");
    // }

    // earth
    public function sidebar(){
        return view("dashboard.sidebar");
    }
    public function gallery(){
        return view(".gallery");
    }
    public function tests(){
        return view(".tests");
    }
}


