<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Patient;
// use DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $doctor_count=User::count();
        $patient_count=Patient::count();
        $appointment_count=Appointment::count();

        $online_appointment_count=Appointment::whereNull('checked')
        ->whereNull('date')
        ->count();
        
        //fetching the appointment for today
        $patient= Appointment::where(['appointments.date' => Carbon::now('Asia/Dhaka')->addDay(0)->format('Y-m-d')])
             ->orderBy('checked')
             ->get();
  
    
     return view('home')->with('doctor_count',$doctor_count)
                        ->with('patient_count',$patient_count)
                        ->with('appointment_count',$appointment_count)
                        ->with('online_appointment_count',$online_appointment_count)
                        ->with('data',$patient);
    }
    public function make_admin()
    {
        $doctors=User::all();
        return view('admin.make_admin')->with('doctors',$doctors);
    }
    public function change_permission($id)
    {
       $user = User::find($id);
       if($user->is_admin){
             $user->is_admin = NULL;
             $user->save();
       }else{
             $user->is_admin = 1;
             $user->save();
       }
       return redirect()->back()->with('msg','Permission changed successfully..!');
    }
}
