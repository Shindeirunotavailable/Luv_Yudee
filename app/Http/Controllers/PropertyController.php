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
    // DataBaseController
    public function databaseconnect(Request $request)
    {
        $id_properties = $request['id_properties'];
        $id_media  = $request['id_media'];

        $provinces = Province::all();
        $amphures = Amphure::all();
        $districts = District::all();
        $property = Property::property($id_properties);

        $this->data['provinces'] = Province::all();
        $this->data['amphures'] = Amphure::all();
        $this->data['districts'] = District::all();
        $this->data['property'] = $property;

        if (isset($request['id_properties'])) {
            $this->data['id_properties'] = $request['id_properties'];
        }
        return view('dashboard.sidebardashboard')->with('data', $this->data);
    }

    // PropertyController
    public function updatedata(Request $request)
    {
        $data = array(
            'title' => $request['title'],
            'description' => json_encode($request['description']),
            'category' => implode(',', $request['category']),
            'status' => implode(',', $request['status']),
            'price' => $request['price'],
            'image_url'=> $request['image_url'],
            'video_url'=> $request['video_url'],
            'address'=> $request['address'],
            'provinces'=> $request['provinces'],
            'amphures'=> $request['amphures'],
            'districts'=> $request['districts'],
            'zipcode'=> $request['zipcode'],

        );
        if (isset($request['id_properties'])) {
            $id_properties = $request['id_properties'];
            $data['updated_at'] = date('Y-m-d H:i:s');
            $data['updated_by'] = 2;
            // $imageName = time().'_'.$request->image->getClientOriginalName();
            // $request->file('image')->move(public_path('/assets/upload_image' ), $imageName);
            // $data['image_url'] = ('/assets/upload_image/'. $imageName);
            // $videoName = time().'_'.$request->video->getClientOriginalName();
            // $request->file('video')->move(public_path('/assets/upload_video'), $videoName);
            // $data['video_url'] = ('/assets/upload_video/' . $videoName);

            DB::table('pp_addproperties')->where('id_properties', $request['id_properties'])->update($data);
        } else {
            $data['updated_at'] = date('Y-m-d H:i:s');
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['created_by'] = 1;
           // // dd($request->all());

            $imageName = time().'_'.$request->image->getClientOriginalName();
            $request->file('image')->move(public_path('/assets/upload_image' ), $imageName);
            $data['image_url'] = ('/assets/upload_image/'. $imageName);
            $videoName = time().'_'.$request->video->getClientOriginalName();
            $request->file('video')->move(public_path('/assets/upload_video'), $videoName);
            $data['video_url'] = ('/assets/upload_video/' . $videoName);

            $id_properties = DB::table('pp_addproperties')->insertGetId($data);
        }
        return redirect('addproperty?id_properties=' . $id_properties)
        ->with('success', 'Property and Media uploaded successfully');
    }


    // ProvinceController
    public function db_provinces(Request $request)
    {
        if ($request->has('function') && $request->input('function') === 'provinces') {

            $id = $request->input('id');
            $Amphure = Amphure::where('province_id', $id)->get();
            $options = '<option selected disabled>กรุณาเลือกอำเภอ</option>';
            foreach ($Amphure as $value) {
                $options .= '<option value="' . $value->id . ' ">' . $value->name_th . '</option>';
            }
            return response()->json(['options' => $options]);
        }
        if ($request->has('function') && $request->input('function') === 'amphures') {
            $id = $request->input('id');
            $districts = District::where('amphure_id', $id)->get();
            $options = '<option selected disabled>กรุณาเลือกตำบล</option>';
            foreach ($districts as $value) {
                $options .= '<option value="' . $value->id . '">' . $value->name_th . '</option>';
            }
            return response()->json(['options' => $options]);
        }
        if ($request->has('function') && $request->input('function') === 'districts') {
            $id = $request->input('id');
            $district = District::find($id);
            if ($district) {
                return response()->json(['zip_code' => $district->zip_code]);
            } else {
                return response()->json(['zip_code' => '']);
            }
        }
        return response()->json(['options' => '']);
    }
}
