<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Amphure;
use App\Models\District;

class ProvincesController extends Controller
{
    public function sidebar()
    {
        $provinces = Province::all(); // ดึงข้อมูลจังหวัดทั้งหมดจากฐานข้อมูล
        $amphures = Amphure::all();
        $districts = District::all();

        return view('dashboard.sidebar', compact('provinces','districts','amphures'));
    }

    public function db_provinces(Request $request)
    {
        // dd($request->all());
        // ตรวจสอบว่ามีข้อมูล function และมีค่าเป็น 'provinces' หรือไม่
        if ($request->has('function') && $request->input('function') === 'provinces') {

            // ดึงค่า id จากคำขอ
            $id = $request->input('id');

            // ค้นหาอำเภอทั้งหมดที่ตรงกับจังหวัด id ที่ระบุ
            $amphures = Amphure::where('province_id', $id)->get();


            // สร้างตัวเลือกอำเภอที่สามารถเลือกได้
            $options = '<option selected disabled>กรุณาเลือกอำเภอ</option>';
            foreach ($amphures as $value) {
                $options .= '<option value="'.$value->id.'">'.$value->name_th.'</option>';
            }

            // ส่งข้อมูลทั้งหมดกลับในรูปแบบ JSON
            return response()->json(['options' => $options]);
        }
        if ($request->has('function') && $request->input('function') === 'amphures') {
            $id = $request->input('id');

            $districts = District::where('amphure_id', $id)->get();

            $options = '<option selected disabled>กรุณาเลือกตำบล</option>';
            foreach ($districts as $value) {
                $options .= '<option value="'.$value->id.'">'.$value->name_th.'</option>';
            }

            return response()->json(['options' => $options]);
        }
        if ($request->has('function') && $request->input('function') === 'districts') {
            $id = $request->input('id');

            // ค้นหาข้อมูลตำบลที่มี id ตรงกับที่ระบุ
            $district = District::find($id);

            // ตรวจสอบว่าพบข้อมูลตำบลหรือไม่
            if ($district) {
                // ส่งค่า zip code กลับไปให้กับ client
                return response()->json(['zip_code' => $district->zip_code]);
            } else {
                // ถ้าไม่พบข้อมูลตำบลให้ส่งค่าว่างกลับไป
                return response()->json(['zip_code' => '']);
            }
        }

        return response()->json(['options' => '']);

    }
}
