<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Models\createAccount;
// use App\Models\Newsletter;
use App\Models\pp_Newsletter;
use App\Mail\news;
use App\Models\Reviews;




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

    // public function review(){
    //     return view(".dashboard.review");
    // }

    public function property(){

        // $pp_reviews=DB::table('pp_reviews')->get();
        // return view(".propertyDetail.property")->with('data',$pp_reviews);
        $showrivew=Reviews::orderByDesc('id_review')->where('review_status',true)->get();
        return view('.propertyDetail.property')->with('data', $showrivew);
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
        $existingEmail = pp_Newsletter::Gethome($username);
        // $existingUser = createAccount::Getemail($username);

        if ($existingEmail) {
            // ถ้ามีอีเมลนี้อยู่แล้ว
            // return redirect('/home')->with('warning', 'This email is already subscribed.');
            $errorMessages = '';
                return response()->json(['success' => false, 'messageError' => $errorMessages]); // ส่ง JSON กลับไปและระบุข้อความแจ้งเตือน
        }
        // elseif ($existingUser){
        //     return redirect('/home')->with('warning', 'This email is already subscribed.');
        // }
         else {
            // ถ้ายังไม่มีอีเมลนี้ในฐานข้อมูล
            $data = [
                'newsletter_email' => $username,
                'create_datetime' => date('Y-m-d H:i:s'),
                'update_datetime' => date('Y-m-d H:i:s'),
            ];

            // เพิ่มข้อมูลในตาราง pp_newsletters
            DB::table('pp_newsletters')->insert($data);
            mail::to($username)->send(new news($username));

            // ไปที่หน้า home พร้อมกับข้อความเตือน
            // return redirect('/home')->with('success', 'You have successfully subscribed to our newsletter.');
            $errorMessages = '';
            return response()->json(['success' => true, 'message' => $errorMessages]); // ส่ง JSON กลับไปและระบุ URL ที่ต้องการ redirect
        }
    }
}



