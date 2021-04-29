<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use DB;
use Auth;
Use Redirect;

class ProfileController extends Controller
{
    public function read($id){
        $user=DB::table('users AS t1')
        ->select('t1.name','t1.email','t1.id')
        ->where('t1.id',$id)->first();

        $profile=DB::table('profiles AS t1')
        ->select('t1.phone','t1.gender','t1.occupation','t1.address','t1.img')
        ->where('t1.user_id',$id)->first();

        if($profile){
            $data = [
                'id'=>$user->id,
                'name' => $user->name,
                'email' => $user->email,
                'occupation' => $profile->occupation,
                'phone' => $profile->phone,
                'address' => $profile->address,
                'gender' => $profile->gender,
                'img' => $profile->img,
            ];
        }
        else{
            $data = [
                'id'=>$user->id,
                'name' => $user->name,
                'email' => $user->email,
                'occupation' => "not set",
                'phone' => "not set",
                'address' => "not set",
                'gender' => "not set",
                'img' => "admin/assets/img/doctor.png",
            ];
        }
        return view('profile')->with('data',$data);
    }
    public function update($id){

        $user=DB::table('users AS t1')
        ->select('t1.name','t1.email')
        ->where('t1.id',$id)->first();

        $profile=DB::table('profiles AS t1')
        ->select('t1.phone','t1.gender','t1.occupation','t1.address','t1.img')
        ->where('t1.user_id',$id)->first();

        if($profile){
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'occupation' => $profile->occupation,
                'phone' => $profile->phone,
                'address' => $profile->address,
                'gender' => $profile->gender,
                'img' => $profile->img,
            ];
        }
        else{
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'occupation' => "",
                'phone' => "",
                'address' => "",
                'gender' => "",
                'img' => "admin/assets/img/doctor.png",
            ];
        }
       
       
        return view('edit.profile')->with('data',$data);
    }

    public function saveProfile(Request $request){
        //getting the image url
        $image=$request->file('image');
    	if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='admin/assets/upload/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $url=$image_url;

        	}else{
                $url='admin/assets/upload/doctor.png';
    	}
        //updating user name in users table
       $user= DB::table('users')
                ->where('id', Auth::user()->id)
                ->update(['name' => $request->get('name')]);
        //updating other information in profiles table
        if (Profile::where('user_id', '=', Auth::user()->id)->count() > 0) {
            DB::table('profiles')
            ->where('user_id', Auth::user()->id)   
            ->update(['phone' => $request->get('phone'),
                    'address' => $request->get('address'),
                    'gender' => $request->get('gender'), 
                    'img' =>   $url,
                    'occupation' => $request->get('occupation'), 
            ]);  
                 }  
                 else{
                    DB::table('profiles')->insert([
                        'user_id' => Auth::user()->id,
                        'phone' => $request->get('phone'),
                        'address' => $request->get('address'),
                        'gender' => $request->get('gender'), 
                        'img' => $url, 
                        'occupation' => $request->get('occupation'), 
                    ]);
                 } 
                 return Redirect::back();
     
         
    }
    public function myprofile(){
        $user=DB::table('users AS t1')
        ->select('t1.name','t1.email')
        ->where('t1.id',Auth::user()->id)->first();

        $profile=DB::table('profiles AS t1')
        ->select('t1.phone','t1.gender','t1.occupation','t1.address','t1.img')
        ->where('t1.user_id',Auth::user()->id)->first();

        if($profile){
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'occupation' => $profile->occupation,
                'phone' => $profile->phone,
                'address' => $profile->address,
                'gender' => $profile->gender,
                'img' => $profile->img,
            ];
        }
        else{
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'occupation' => "not set",
                'phone' => "not set",
                'address' => "not set",
                'gender' => "not set",
                'img' => "public/admin/assets/upload/doctor.png",
            ];
        }

        return view('myprofile')->with('data',$data);
    }



}
