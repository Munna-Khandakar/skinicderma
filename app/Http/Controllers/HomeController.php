<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use DB;
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
        $doctor=DB::table('users AS t1')
             ->select('t1.name','t2.occupation','t2.img')
             ->leftJoin('profiles AS t2','t2.user_id','=','t1.id')
             ->get();
        //fetching the appointment for today
        $patient= Appointment::where(['appointments.date' => Carbon::now('Asia/Dhaka')->addDay(0)->format('Y-m-d')])
             ->orderBy('checked')
             ->get();
  
    
     return view('home')->with('doctor',$doctor)->with('data',$patient);
    }
}
