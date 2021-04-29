<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Patient;



class PatientController extends Controller
{
    public function read(){
        $patients = Patient::all();
        return view ('patients')->with('patients',$patients);
        
    }
   
}
