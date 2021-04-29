<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function read(){
        $patient=Appointment::whereNull('saved')
        ->where('checked',1)
        ->get();
        return view('activities')->with('patients',$patient,);
    }
}
