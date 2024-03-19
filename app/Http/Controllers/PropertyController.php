<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

use App\Models\Property;
use App\Models\Media;
use App\Models\Amenities;
use App\Models\Province;
use App\Models\Amphure;
use App\Models\District;

class PropertyController extends Controller
{


    // DataBaseController
    public function databaseconnect(Request $request)
    {
        $id_property = $request['id_property'];
        $property = Property::property($id_property);


        $this->data['provinces'] = Province::all();
        $this->data['amphures'] = Amphure::all();
        $this->data['districts'] = District::all();
        $this->data['amenities'] = Amenities::all();

        $this->data['media'] = Media::all();
        $this->data['property'] = $property;


        if (isset($request['id_property'])) {
            $this->data['id_property'] = $request['id_property'];
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
            'property_type' => $request['type'] ? implode(',', $request['type']) : null,
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
            'property_amenities' => $request['amenities'] ? implode(',', $request['amenities']) : null,
            'property_stage' => $request['property_stage'],


        );
        if (isset($request['id_property'])) {
            $id_property = $request['id_property'];
            $data['update_datetime'] = date('Y-m-d H:i:s');
            $data['update_by'] = 2;
            DB::table('pp_properties')->where('id_property', $id_property)->update($data);

            // Update image and video URLs if new files are uploaded
            if ($request->hasFile('image')) {
                $mediaData = [];
                foreach ($request->file('image') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('/assets/upload_image'), $imageName);
                    $image_url = '/assets/upload_image/' . $imageName;
                    $mediaData[] = [
                        'media_property' => $image_url,
                        'media_file_type' => '1',
                        'create_by' => '1',
                        'update_by' => '0',
                        'update_datetime' => date('Y-m-d H:i:s'),
                        'create_datetime' => date('Y-m-d H:i:s'),
                        'id_property' => $id_property,
                    ];
                }
                // Insert media data using Query Builder
                DB::table('pp_media')->insert($mediaData);
            }

            if ($request->hasFile('video')) {
                $mediaData = [];
                foreach ($request->file('video') as $video) {
                    $videoName = time() . '_' . $video->getClientOriginalName();
                    $video->move(public_path('/assets/upload_video'), $videoName);
                    $video_url = '/assets/upload_video/' . $videoName;
                    $mediaData[] = [
                        'media_property' => $video_url,
                        'media_file_type' => '2',
                        'create_by' => '1',
                        'update_by' => '0',
                        'update_datetime' => date('Y-m-d H:i:s'),
                        'create_datetime' => date('Y-m-d H:i:s'),
                        'id_property' => $id_property,
                    ];
                }
                // Insert media data using Query Builder
                DB::table('pp_media')->insert($mediaData);
            }
        } else {

            $data['update_datetime'] = date('Y-m-d H:i:s');
            $data['create_datetime'] = date('Y-m-d H:i:s');
            $data['update_by'] = 1;
            $data['create_by'] = 1;
            $data['property_status'] = 1;
            $id_property = DB::table('pp_properties')->insertGetId($data);
            if ($request->hasFile('image') || $request->hasFile('video')) {
                $mediaData = [];
                if ($request->hasFile('image')) {
                    foreach ($request->file('image') as $image) {
                        $imageName = time() . '_' . $image->getClientOriginalName();
                        $image->move(public_path('/assets/upload_image'), $imageName);
                        $image_url = '/assets/upload_image/' . $imageName;
                        $mediaData[] = [
                            'media_property' => $image_url,
                            'media_file_type' => '1',
                            'create_by' => '1',
                            'update_by' => '1',
                            'update_datetime' => date('Y-m-d H:i:s'),
                            'create_datetime' => date('Y-m-d H:i:s'),
                            'id_property' => $id_property,
                        ];
                    }
                }
                if ($request->hasFile('video')) {
                    foreach ($request->file('video') as $video) {
                        $videoName = time() . '_' . $video->getClientOriginalName();
                        $video->move(public_path('/assets/upload_video'), $videoName);
                        $video_url = '/assets/upload_video/' . $videoName;
                        $mediaData[] = [
                            'media_property' => $video_url,
                            'media_file_type' => '2',
                            'create_by' => '1',
                            'update_by' => '1',
                            'update_datetime' => date('Y-m-d H:i:s'),
                            'create_datetime' => date('Y-m-d H:i:s'),
                            'id_property' => $id_property,
                        ];
                    }
                }
                DB::table('pp_media')->insert($mediaData);
            }

        }
        return redirect('addproperty?id_property=' . $id_property)
            ->with('success', 'message')
            ;
    }

    // deleteMedia
    public function deleteMedia($id_media)
    {
            $media = DB::table('pp_media')->where('id_media', $id_media)->first();

        if ($media) {
            $file_url = public_path($media->media_property);

            if (File::exists($file_url));
            // dd($file_url);
            {
                File::delete($file_url);
                // dd($file_url);
            }
            DB::table('pp_media')->where('id_media', $id_media)->delete();
            return redirect()->back();
        }
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

    // public function showproperty()
    // {
    //     $blogs = DB::table('pp_properties')->get();
    //     return view('dashboard.myproperty', compact('blogs'));
    // }

    // public function showproperty1(){
    //     return view("dashboard.myproperty");
    // }

    public function review(Request $request){
        // dd('review');
        
        // dd($request);
        $star = $request->input('star');
        $name = $request->input('name');
        $email = $request->input('email');
        $content = $request->input('content');

        $data = [
            'review_star' => $star,
            'review_name' => $name,
            'review_email' => $email,
            'review_content' => $content,
            'create_datetime' => date('Y-m-d H:i:s'),
            'update_datetime' => date('Y-m-d H:i:s'),
        ];
        
        DB::table('pp_reviews')->insert($data);
        $pp_reviews=DB::table('pp_reviews')->get();
        dd($pp_review);


        // return redirect('/property');
        return view('propertyDetail.property')-> with('data', $pp_reviews);
        // return view('propertyDetail.property', ['pp_reviews' => $pp_reviews]);
        // return redirect('property')->with('pp_reviews', $pp_reviews);


        // ใช้ได้
        // Session::put('pp_reviews', $pp_reviews);
        // return redirect('property');

    }
}

