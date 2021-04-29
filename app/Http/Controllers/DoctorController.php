<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Profile;
use App\Models\User;
use Auth;
Use Redirect;


class DoctorController extends Controller
{
   public function read(){
    $doctor=DB::table('users AS t1')
    ->select('t1.id','t1.name','t2.address','t2.occupation','t2.img')
    ->leftJoin('profiles AS t2','t2.user_id','=','t1.id')
    ->get();
   return view('doctors')->with('doctor',$doctor);
   }

   public function delete($id){
      $Profile =Profile::where('user_id',$id)->first();
      if ($Profile != null) {
         $Profile->delete();
         $user =User::where('id',$id)->first();
         if ($user != null) {
            $user->delete();
            return Redirect::back();
        }
        
     }else{
      $user =User::where('id',$id)->first();
      if ($user != null) {
         $user->delete();
         return Redirect::back();
        }
     }
   }
}
