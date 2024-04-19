<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Reviews;
use App\Models\Reply;
use Illuminate\Support\Facades\Session;

class ReviewsController extends Controller
{
    public function review(Request $request){
        
        // dd($request);
        $star = $request->input('star');
        $name = $request->input('name');
        $email = $request->input('email');
        $content = $request->input('content');
        $create_by = $request->input('user_id');

        $data = [
            'review_star' => $star,
            'review_name' => $name,
            'review_email' => $email,
            'review_content' => $content,
            'create_datetime' => date('Y-m-d H:i:s'),
            'update_datetime' => date('Y-m-d H:i:s'),
            'create_by' => $create_by, // ใช้ id ของผู้ใช้ที่เพิ่มไปลงในฐานข้อมูล
        ];
        DB::table('pp_reviews')->insert($data);
        $pp_reviews=DB::table('pp_reviews')->get();
        return response()->json(['success' => true, 'message' => 'Testajax']);
        // return response()->json(['success' => false, 'redirect' => '/addproperty']); 

    }

    public function deletereview($id_review){
        DB::table('pp_reviews')->where('id_review',$id_review)->delete();
        // return redirect('/addproperty');
        return redirect()->back();
    }

    public function change($id_review){
        $pp_reviews=DB::table('pp_reviews')->where('id_review',$id_review)->first();
        $data=[
            'review_status'=>!$pp_reviews->review_status
        ];
        $pp_reviews=DB::table('pp_reviews')->where('id_review',$id_review)->update($data);
        return redirect('/addproperty');
    }

    public function reply(Request $request){
        // dd($request->all());
        $id_review = $request->input('id_review');
        $name_reply = $request->input('name_reply');
        $email_reply = $request->input('email_reply');
        $content_reply = $request->input('content_reply');
        $create_by = $request->input('user_id');
        
        $data = [
            
            'id_review' => $id_review, 
            'reply_name' => $name_reply,
            'reply_email' => $email_reply,
            'reply_content' => $content_reply,
            'create_datetime' => date('Y-m-d H:i:s'),
            'update_datetime' => date('Y-m-d H:i:s'),
            'create_by' => $create_by, // ใช้ id ของผู้ใช้ที่เพิ่มไปลงในฐานข้อมูล
        ];
        
        DB::table('pp_reply')->insert($data);
        $pp_reply=DB::table('pp_reply')->get();
        // return view('propertyDetail.property')-> with('data', $pp_reviews);

        return response()->json(['success' => true, 'message' => 'Testreq']);
        // return redirect('/property')-> with('data', $pp_reviews);
       

    }

    public function deletereply($id_reply){
        DB::table('pp_reply')->where('id_reply',$id_reply)->delete();
        // return redirect('/addproperty');
        return redirect()->back();
    }

    public function changereply($id_reply){
        $pp_reply=DB::table('pp_reply')->where('id_reply',$id_reply)->first();
        $data=[
            'reply_status'=>!$pp_reply->reply_status
        ];
        $pp_reply=DB::table('pp_reply')->where('id_reply',$id_reply)->update($data);
        return redirect('/addproperty');
    }

    //------------------------------------------ รอลบ -----------------------------------------

    public function analyzeReviews() {
        $totalReviews = DB::table('pp_reviews')->count();
        $totalStars = DB::table('pp_reviews')->sum('review_star');
        $averageRating = $totalStars / $totalReviews;
        $starCounts = [];
        for ($i = 1; $i <= 5; $i++) {
            $starCounts[$i] = DB::table('pp_reviews')->where('review_star', $i)->count();
        }
        // แสดงผลการวิเคราะห์
        return view('.propertyDetail.test')->with([
            'totalReviews' => $totalReviews,
            'averageRating' => $averageRating,
            'starCounts' => $starCounts,
        ]);
    }



    




}
