<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\pp_addproperty;
use App\Models\Province;
use App\Models\Amphure;
use App\Models\District;

class PropertyController extends Controller
{
    // public function __construct() {
    //     $this->data['css'] = array('', '');
    // }

    public function updatedata(Request $request){
        // dd($request->all());
        $data=array(
            'title'=>$request['title'],
            'description'=>json_encode($request['description']),
            'category'=>implode(',', $request['category']),
            'status'=>implode(',', $request['status']),
            'price'=>$request['price'],
            'updated_at'=>date('Y-m-d H:i:s')
        );
        if(isset($request['id_properties'])){
            // update
            dd($request->all());
        }else{
            //
            $data['created_at']= date('Y-m-d H:i:s');
            $id_properties = DB::table('pp_addproperties')->insertGetId( $data);
        }
        return redirect('sidebar?id_properties='.$id_properties);
        // dd($data);


    }

    public function sidebar(Request $request)
    {
        $id_properties=$request['id_properties'];
        if(isset($request['id_properties'])){
        $id_properties=$request['id_properties'];

        }

        $provinces = Province::all(); // ดึงข้อมูลจังหวัดทั้งหมดจากฐานข้อมูล
        $amphures = Amphure::all();
        $districts = District::all();
        $property = pp_addproperty::property($id_properties);

        $this->data['property']=$property ;
        $this->data['provinces']=Province::all();
        $this->data['districts']=District::all();
        $this->data['amphures']=Amphure::all();
        // dd($property);

        return view('dashboard.sidebar')->with('data',$this->data);

    }


}
