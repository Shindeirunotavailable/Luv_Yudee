<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Property;
use App\Models\Amenities;
use App\Models\Province;
use App\Models\Amphure;
use App\Models\District;

class PropertyController extends Controller
{


    // DataBaseController
    public function databaseconnect(Request $request)
    {
        $id_properties = $request['id_properties'];
        $property = Property::property($id_properties);

        $this->data['provinces'] = Province::all();
        $this->data['amphures'] = Amphure::all();
        $this->data['districts'] = District::all();
        $this->data['amenities'] = Amenities::all();
        $this->data['property'] = $property;

        if (isset($request['id_properties'])) {
            $this->data['id_properties'] = $request['id_properties'];
        }
        return view('dashboard.sidebardashboard')->with('data', $this->data)
                                                ;
    }

    // PropertyController
    public function updatedata(Request $request)
    {
        $data = array(
            'title' => $request['title'],
            'description' => json_encode($request['description']),
            'category' => $request['category'],
            'status' => $request['status'],
            'price' => $request['price'],
            // 'image_url'=> $request['image_url'],
            // 'video_url'=> $request['video_url'],
            'address'=> $request['address'],
            'provinces'=> $request['provinces'],
            'amphures'=> $request['amphures'],
            'districts'=> $request['districts'],
            'zipcode'=> $request['zipcode'],
            'latitude'=> $request['latitude'],
            'longitude'=> $request['longitude'],
            'floor_amount'=> $request['floor_amount'],
            'rooms'=> $request['rooms'],
            'bedrooms'=> $request['bedrooms'],
            'bathrooms'=> $request['bathrooms'],
            'interior_size'=> $request['interior_size'],
            'garage'=> $request['garage'],
            'garage_size'=> $request['garage_size'],
            'psm'=> $request['psm'],
            'year_build'=> $request['year_build'],
            'notes'=> $request['notes'],
            'amenities' => implode(',', $request['amenities']),

        );
        if (isset($request['id_properties'])) {
            $id_properties = $request['id_properties'];
            $data['updated_datetime'] = date('Y-m-d H:i:s');
            $data['updated_by'] = 2;

            if ($request->hasFile('image')) {
                $imageUrl = [];

                foreach ($request->file('image') as $image) {
                    $imageName = time().'_'.$image->getClientOriginalName();
                    $image->move(public_path('/assets/upload_image' ), $imageName);
                    $imageUrl[] = '/assets/upload_image/'. $imageName;
                }

                $data['image_url'] = implode(',', $imageUrl);
            }

            if ($request->hasFile('video')) {
                $videoUrl = [];

                foreach ($request->file('video') as $video) {
                    $videoName = time().'_'.$video->getClientOriginalName();
                    $video->move(public_path('/assets/upload_video' ), $videoName);
                    $videoUrl[] = '/assets/upload_video/'. $videoName;
                }

                $data['video_url'] = implode(',', $videoUrl);
            }

            // เช็คว่ามีการอัพโหลดรูปหรือวิดีโอใหม่หรือไม่ ถ้าไม่มีจะใช้ข้อมูลเดิม
            if (!($request->hasFile('video') || $request->hasFile('video'))) {
                // ใช้ข้อมูลเดิมจากคุณสมบัติก่อนหน้า
                $property = Property::property($id_properties);
                $data['image_url'] = $property->image_url;
                $data['video_url'] = $property->video_url;
            }

            DB::table('pp_addproperties')->where('id_properties', $request['id_properties'])->update($data);

        } else {
            $data['updated_datetime'] = date('Y-m-d H:i:s');
            $data['created_datetime'] = date('Y-m-d H:i:s');
            $data['created_by'] = 1;
           // // dd($request->all());
            if ($request->hasFile('image')) {
                $imageName = time().'_'.$request->image->getClientOriginalName();
                $request->file('image')->move(public_path('/assets/upload_image' ), $imageName);
                $data['image_url'] = ('/assets/upload_image/'. $imageName);
            }

            if ($request->hasFile('video')) {
                $videoName = time().'_'.$request->video->getClientOriginalName();
                $request->file('video')->move(public_path('/assets/upload_video'), $videoName);
                $data['video_url'] = ('/assets/upload_video/' . $videoName);
            }

            $id_properties = DB::table('pp_addproperties')->insertGetId($data);
        }
        return redirect('addproperty?id_properties=' . $id_properties)
        ->with('success', 'Property uploaded successfully');
    }


    // ProvinceController
    public function db_provinces(Request $request)
    {
        if ($request->has('function') && $request->input('function') === 'provinces') {
            $id = $request->input('id');
            $amphure = Amphure::where('province_id', $id)->get();
            $options = '<option selected disabled>กรุณาเลือกอำเภอ</option>';
            foreach ($amphure as $value) {
                $options .= '<option value="' . $value->id . ' ">' . $value->name_th . '</option>';
            }
            return response()->json(['options' => $options]);
        }
        if ($request->has('function') && $request->input('function') === 'amphures') {
            $id = $request->input('id');
            $districts = District::where('amphure_id', $id)->get();
            $options = '<option selected disabled>กรุณาเลือกตำบล</option>';
            foreach ($districts as $value) {
                $options .= '<option value="' . $value->id . ' ">' . $value->name_th . '</option>';
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
