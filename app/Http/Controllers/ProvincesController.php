<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Amphure;
use App\Models\District;

class ProvincesController extends Controller
{
    public function provinces()
    {
        $provinces = Province::all(); // ดึงข้อมูลจังหวัดทั้งหมดจากฐานข้อมูล
        $amphures = Amphure::all();
        $districts = District::all();

        return view('provinces', compact('provinces','districts','amphures'));
        // return view('dashboard.addproperty', compact('provinces','districts','amphures')); // ส่งข้อมูลไปยัง provinces.blade.php
    }

    public function db_provinces(Request $request)
    {
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

        // ถ้าไม่ใช่ function 'provinces' หรือไม่มี function ในคำขอ
        // ส่งค่าว่างกลับไป
        return response()->json(['options' => '']);
    }
}
