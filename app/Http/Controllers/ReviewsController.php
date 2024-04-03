<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Reviews;
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
        // return view('propertyDetail.property')-> with('data', $pp_reviews);

        return response()->json(['success' => true, 'message' => 'Testajax']);
        // return redirect('/property')-> with('data', $pp_reviews);
       

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
}
