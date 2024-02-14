<?php

namespace App\Http\Controllers;
use App\Models\pp_addproperty;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PropertyController extends Controller
{
    public function store(Request $request) // อัพเดตข้อมูล
    {
        $property = new pp_addproperty();
        $property->title = $request->input('title');
        $property->description = $request->input('description');
        // implode() จะเอาค่าที่เลือกใน array รวมเข้าด้วยกันโดยใช้ , เป็นตัวคั่นระหว่างค่า ทำให้ค่าทั้งหมดถูกเปลี่ยนเป็น string และทำให้สามารถใช้ได้กับฐานข้อมูลที่เก็บข้อมูลแบบ string
        $property->category = implode(',', $request->input('category'));
        $property->status = implode(',', $request->input('status'));
        $property->price = $request->input('price');
         // บันทึกข้อมูลลงในฐานข้อมูล
        $property->save();
        $data = [
            'title' => $property->title,
            'description' => $property->description,
            'category' => $property->category,
            'status' => $property->status,
            'price' => $property->price,
        ];
        //  แจ้งเตือนว่าส่งค่าไปแล้ว
        Session::flash('property_created', 'Property created successfully!');
        return redirect('sidebar')->with('property_data', $data);
        // $description = $request->input('description');
        // return view('sidebar', ['description' => $description]);
    }

}
