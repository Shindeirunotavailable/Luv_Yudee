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
        $id_propertie = $request['id_propertie'];
        $property = Property::property($id_propertie);

        $this->data['provinces'] = Province::all();
        $this->data['amphures'] = Amphure::all();
        $this->data['districts'] = District::all();
        $this->data['amenities'] = Amenities::all();
        $this->data['property'] = $property;

        if (isset($request['id_propertie'])) {
            $this->data['id_propertie'] = $request['id_propertie'];
        }
        return view('dashboard.sidebardashboard')->with('data', $this->data);
    }

    // PropertyController
    public function updatedata(Request $request)
    {

        date_default_timezone_set('Asia/Bangkok');
        $data = array(
            'property_title' => $request['title'],
            'property_description' => json_encode($request['description']),
            'property_category' => $request['category'],
            'property_status' => $request['status'],
            'property_price' => $request['price'],
            'property_address' => $request['address'],
            'property_provinces' => $request['provinces'],
            'property_amphures' => $request['amphures'],
            'property_districts' => $request['districts'],
            'property_zipcode' => $request['zipcode'],
            'property_latitude' => $request['latitude'],
            'property_longitude' => $request['longitude'],
            'property_floor_amount' => $request['floor_amount'],
            'property_rooms' => $request['rooms'],
            'property_bedrooms' => $request['bedrooms'],
            'property_bathrooms' => $request['bathrooms'],
            'property_interior_size' => $request['interior_size'],
            'property_garage' => $request['garage'],
            'property_garage_size' => $request['garage_size'],
            'property_psm' => $request['psm'],
            'property_year_build' => $request['year_build'],
            'property_notes' => $request['notes'],
            // 'amenities' => implode(',', $request['amenities']),
            'property_amenities' => $request['amenities'] ? implode(',', $request['amenities']) : null,


        );
        if (isset($request['id_propertie'])) {
            $id_propertie = $request['id_propertie'];
            $data['update_datetime'] = date('Y-m-d H:i:s');
            $data['update_by'] = 2;

            // Update image and video URLs if new files are uploaded
            if ($request->hasFile('image')) {
                $image_url = [];
                foreach ($request->file('image') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('/assets/upload_image'), $imageName);
                    $image_url[] = '/assets/upload_image/' . $imageName;
                }
                $data['property_image_url'] = implode(',', $image_url);
            }

            if ($request->hasFile('video')) {
                $video_url = [];
                foreach ($request->file('video') as $video) {
                    $videoName = time() . '_' . $video->getClientOriginalName();
                    $video->move(public_path('/assets/upload_video'), $videoName);
                    $video_url[] = '/assets/upload_video/' . $videoName;
                }
                $data['property_video_url'] = implode(',', $video_url);
            }
            DB::table('pp_properties')->where('id_propertie', $request['id_propertie'])->update($data);
        } else {

            $data['update_datetime'] = date('Y-m-d H:i:s');
            $data['create_datetime'] = date('Y-m-d H:i:s');
            $data['update_by'] = 1;
            $data['create_by'] = 1;
            // // dd($request->all());
            $image_url = [];
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('/assets/upload_image'), $imageName);
                    $image_url[] = '/assets/upload_image/' . $imageName;
                }
            }

            $video_url = [];
            if ($request->hasFile('video')) {
                foreach ($request->file('video') as $video) {
                    $videoName = time() . '_' . $video->getClientOriginalName();
                    $video->move(public_path('/assets/upload_video'), $videoName);
                    $video_url[] = '/assets/upload_video/' . $videoName;
                }
            }
            $data['property_image_url'] = $image_url ? implode(',', $image_url) : null;
            $data['property_video_url'] = $video_url ? implode(',', $video_url) : null;

            $id_propertie = DB::table('pp_properties')->insertGetId($data);
        }
        return redirect('addproperty?id_propertie=' . $id_propertie)
            // ->with('success', 'Property uploaded successfully')
            ;
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
