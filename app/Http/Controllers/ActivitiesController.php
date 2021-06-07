<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Record;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function read(){
        $patient=Appointment::whereNull('saved')
        ->where('checked',1)
        ->where('saved',NULL)
        ->get();
        return view('activities')->with('patients',$patient,);
    }
    public function add_record($id)
    {
        $appointment = Appointment::where('id', $id)->first();
        
        return view('records.add_record')->with('appointment',$appointment);
    }

    //save the record to records table. 
    //if the phn no is unique in patients table then 1st create a profile in profiles table.
    public function save_record(Request $request)
    {
        if (Patient::where('phone',  $request->phone)->exists()) {
            // exists
            //adding the record of the patient
            $patient_id = Patient::where('phone', $request->phone)->first();
            $record = new Record;
            $record->patient_id = $patient_id->id;
            $record->activity01 = $request->activity01;
            $record->activity02 = $request->activity02;
            $record->due = $request->due;
            $record->save();

            //updating the appointment saved status
            Appointment::where('id', $request->id)->update(array('saved' => 1));
            return redirect()->route('activities')->with('msg','Record saved successfully..!');
            
        }else{
            //patient is added to patient table
            $patient=new Patient;
            $patient->name= $request->name;
            $patient->phone= $request->phone;
            $patient->gender= $request->gender;
            $patient->email= $request->email;
            $patient->save();
          
            //adding the record of the patient
            $patient_id = Patient::where('phone', $request->phone)->first();
            $record = new Record;
            $record->patient_id = $patient_id->id;
            $record->activity01 = $request->activity01;
            $record->activity02 = $request->activity02;
            $record->due = $request->due;
            $record->save();

            //updating the appointment saved status
            Appointment::where('id', $request->id)->update(array('saved' => 1));
            return redirect()->route('activities')->with('msg','New patient added and record saved successfully..!');
        }
        
    }
}
