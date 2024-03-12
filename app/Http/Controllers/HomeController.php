<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Models\createAccount;
use App\Models\Newsletter;
use App\Mail\news;




class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->data['css']=array("login.css");
    // }

    // public function home(){
    //     $this->data['b']=1;
    //     // print_r($this->data['css']);exit;
    //     return view("home.home")->with("a",$this->data);

    // }
    public function home(){
        return view("home.home");
    }
    public function hometest(){
        return view("home.hometest");
    }
    public function test(){
        return view("home.test");
    }
    public function slider(){
        return view("home.slider");
    }
    public function details(){
        return view("home.details");
    }


    // earth

    public function property(){
        return view(".propertyDetail.property");
    }


    public function home_email(Request $request)
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
        $username = $request->input('email');

        // $existingEmail = DB::table('newsletters')->where('email', $username)->first();
        $existingEmail = Newsletter::Gethome($username);
        $existingUser = createAccount::Getemail($username);

        if ($existingEmail) {
            // ถ้ามีอีเมลนี้อยู่แล้ว
            return redirect('/home')->with('warning', 'This email is already subscribed.');
        }elseif ($existingUser){
            return redirect('/home')->with('warning', 'This email is already subscribed.');
        }
         else {
            // ถ้ายังไม่มีอีเมลนี้ในฐานข้อมูล
            $data = [
                'email' => $username,
                'create_datetime' => date('Y-m-d H:i:s'),
                'update_datetime' => date('Y-m-d H:i:s'),
            ];
    
            // เพิ่มข้อมูลในตาราง newsletters
            DB::table('newsletters')->insert($data);
            mail::to($username)->send(new news());
    
            // ไปที่หน้า home พร้อมกับข้อความเตือน
            return redirect('/home')->with('success', 'You have successfully subscribed to our newsletter.');
        }
        
        // $data= [
        //     'email' => $username,
        //     'create_datetime'=> date('Y-m-d H:i:s'),
        //     'update_datetime'=> date('Y-m-d H:i:s'),
        // ];
        // DB::table('newsletters')->insert($data);
        // return redirect('/home');
    }
}


