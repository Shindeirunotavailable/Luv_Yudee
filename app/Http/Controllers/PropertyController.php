<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Property;
use App\Models\Province;
use App\Models\Amphure;
use App\Models\District;

class PropertyController extends Controller
{
    // public function __construct() {
    //     $this->data['css'] = array('', '');
    // }

    // DataBaseController
    public function sidebar(Request $request)
    {
        $id_properties=$request['id_properties'];


        $provinces = Province::all(); // ดึงข้อมูลจังหวัดทั้งหมดจากฐานข้อมูล
        $amphures = Amphure::all();
        $districts = District::all();
        $property = Property::property($id_properties);

        $this->data['provinces']=Province::all();
        $this->data['amphures']=Amphure::all();
        $this->data['districts']=District::all();
        $this->data['property']=$property ;

        if(isset($request['id_properties'])){
            // $id_properties=$request['id_properties'];
            $this->data['id_properties']=$request['id_properties'] ;
            }
        // dd($property);

        return view('dashboard.sidebardashboard')->with('data',$this->data);

    }
    // PropertyController
    public function updatedata(Request $request){
        // dd($request->all());
        $data=array(
            // 'id_properties'=>$request['id_properties'],
            'title'=>$request['title'],
            'description'=>json_encode($request['description']),
            'category'=>implode(',', $request['category']),
            // json_encode ลองใช้เป็น json
            'status'=>implode(',', $request['status']),
            'price'=>$request['price'],
        );
        // dd($request->all());
        if(isset($request['id_properties']))
        {
            // update
            // dd($request->all());

            // $id_properties = $request->input('id_properties');
            $id_properties=$request['id_properties'];
            // อัปเดตข้อมูลในฐานข้อมูล
            $data['updated_at']= date('Y-m-d H:i:s');
            $data['updated_by']= 2;
            DB::table('pp_addproperties')->where('id_properties',$request['id_properties'])->update($data);
            Session::flash('data', 'Property updated successfully!');
            // $data['id_properties']=$request['id_properties'];
        }
        else{
            $data['updated_at']= date('Y-m-d H:i:s');
            $data['created_at']= date('Y-m-d H:i:s');
            $data['created_by']= 1;
            $id_properties = DB::table('pp_addproperties')->insertGetId($data);
            Session::flash('data', 'Property created successfully!');
        }
        return redirect('addproperty?id_properties='.$id_properties);
        // dd($data);
    }


    // ProvincesController
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
                return response()->json(['zip_code' => '']);
            }
        }

        return response()->json(['options' => '']);

    }
 }
