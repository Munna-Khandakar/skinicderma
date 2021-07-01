<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Record;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Spatie\GoogleCalendar\Event;
use App\Models\Setting;
use App\Mail\NextAppointmentMail;

class ActivitiesController extends Controller
{
    public function read(){
        // $patient=Appointment::whereNull('saved')
        // ->where('checked',1)
        // ->where('saved',NULL)
        // ->get();
      //  appointments which are not checked
        $data=Appointment::whereNull('checked')
        ->whereNull('date')
        ->get();
        return view('activities')->with('appointments',$data,);
    }
    public function add_record($phone)
    {
        if (Patient::where('phone',  $phone)->exists()) {
            // exists
            $patient = Patient::where('phone',$phone)->first();
        
            $records = Record::where('patient_id',$patient->id)
                            ->orderBy('created_at', 'DESC')
                            ->get();
           //return $records;
            return view('records.view_record')->with('patient',$patient)->with('records',$records);
            
        }else{
            //patient is added to patient table
            $appointment = Appointment::where('phone', $phone)->first();
            $new_patient=new Patient;
            $new_patient->name= $appointment->name;
            $new_patient->phone= $phone;
            $new_patient->gender= $appointment->gender;
            $new_patient->email= $appointment->email;
            $new_patient->save();
          
            $patient = Patient::where('phone',$phone)->first();
        
            $records = Record::where('patient_id',$patient->id)
                            ->orderBy('created_at', 'DESC')
                            ->get();
        
            return view('records.view_record')->with('patient',$patient)->with('records',$records);

        }
    }

    //save the record to records table. 
    //if the phn no is unique in patients table then 1st create a profile in profiles table.
    public function save_record(Request $request)
    {
            $patient_id = Patient::where('phone', $request->phone)->first();
            $record = new Record;
            $record->patient_id = $request->patient_id;
            $record->service = $request->service;
            $record->advice_sitting = $request->advice_sitting;
            $record->sitting_completed = $request->sitting_completed;
            $record->total_bill = $request->total_bill;
            if(empty($request->paid_amount)){
                $record->paid_amount = $request->total_bill;
            }else{
                $record->paid_amount = $request->paid_amount;
            }        
            $record->next_date = $request->next_date;
            $record->save();

            if(!empty($request->next_date)){

            $starting_hour = Setting::where('settings_name','starting_hour')->first();
            $office_duration = Setting::where('settings_name','office_duration')->first();
                
             //google calender date & time format
             //$date = Carbon::createFromFormat('d/m/Y', $request->next_date)->format('Y-m-d');
             $date = $request->next_date;
             $time12=$starting_hour->settings_value;
             $time24  = date("H:i", strtotime( $time12 ));
 
             //google calender settings
             $startTime=Carbon::parse($date.' '.$time24.'Asia/Dhaka');
             $endTime=(clone $startTime)->addHours($office_duration->settings_value);
             $event = new Event;
             $event->name = 'Appointment: '.$request->name;
             $event->startDateTime = $startTime;
             $event->endDateTime =  $endTime;
             $event->save();

             //saving appointment
             $appointment=new Appointment;
             $appointment->name= $request->name;
             $appointment->phone= $request->phone;
             $appointment->email= $request->email;
             $appointment->gender= $request->gender;
             $appointment->date= $date;
             $appointment->time= $time24;
             $appointment->save();
            }
            if(!empty($request->email)){
                $starting_hour = Setting::where('settings_name','starting_hour')->first();
                $data = [
                    'name' => $request->name,
                    'date' => $request->next_date,
                    'time' => $starting_hour->settings_value,
                ];
                Mail::to($request->email)->send(new NextAppointmentMail($data));
            }
            
            return redirect()->back()->with('msg','Record saved successfully..!')
                                     ->with('type','success');
        
    }
}
