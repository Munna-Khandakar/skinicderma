<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Record;

/**
     * the appointments which are 
     * checked will go to activities
     * saved will go to patients table
     */

class PatientController extends Controller
{
    public function read(){
        $patients = Patient::all();
        return view ('patients')->with('patients',$patients);
        
    }

    public function view_record($id){
        $patient = Patient::where('id',$id)->first();
        
        $records = Record::where('patient_id',$id)->get();
       // return $records;
        return view('records.view_record')->with('patient',$patient)->with('records',$records);
    }
    public function clear_due($id)
    {
        $record = Record::where('id', $id)->first();
        Record::where('id', $id)->update(array('paid_amount' => $record->total_bill));
        return redirect()->back()->with('msg','Due Amount cleared successfully..!');
    }
   
}
