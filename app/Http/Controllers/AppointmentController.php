<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmMail;
use App\Mail\NextAppointmentMail;
use App\Mail\AdminNotificationMail;
use App\Mail\ThanksMail;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use DB;
use App\Models\Patient;
use App\Models\Appointment;
use Carbon\Carbon;
use Redirect;

class AppointmentController extends Controller
{
    public function create(Request $request){
        $appointment=new Appointment;
        $appointment->name= $request->name;
        $appointment->phone= $request->phone;
        $appointment->email= $request->email;
        $appointment->gender= $request->gender;
        $appointment->save();
        
        if($request->email){
            Mail::to($request->email)->send(new WelcomeMail($request->name));
        }
        //admin mail notification....
        Mail::to('munnashisad@gmail.com')->send(new AdminNotificationMail());
        return view('thanks');
        
        
    }
    public function read(){
        //appointments which are not checked
        // $data=Appointment::whereNull('checked')
        // ->whereNull('date')
        // ->get();
        $data= Appointment::where(['appointments.date' => Carbon::now('Asia/Dhaka')->addDay(0)->format('Y-m-d')])
             ->orderBy('checked')
             ->get();
    
        return view('appointments')->with('appointments',$data,);
    }

    public function saveAppointment(Request $request){
        $data = Appointment::where('id',$request->id)->get();
        return view('edit.appointment')->with('patient',$data); 
    }

    public function appointmentDate(Request $request){
        //google calender date & time format
        $date = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');
        $time12=$request->time;
        $time24  = date("H:i", strtotime( $time12 ));

        //updating time and date for appointment date
        Appointment::where('id', $request->id)
        ->update([
            'time' =>$time24,
            'date' => $date,
         ]);

        //google calender settings
        $startTime=Carbon::parse($date.' '.$time24.'Asia/Dhaka');
        $endTime=(clone $startTime)->addHour();
        $event = new Event;
        $event->name = 'Appointment: '.$request->name;
        $event->startDateTime = $startTime;
        $event->endDateTime =  $endTime;
        $event->save();
        //generating data for email
        $data = [
            'name' => $request->name,
            'date' => $request->date,
            'time' => $request->time,
        ];
        Mail::to($request->email)->send(new ConfirmMail($data));

        return redirect()->route('activities')->with('msg','Appointment saved successfully...!');
    }

    public function deleteAppointment($id){

        Appointment::find( $id )->delete(); 
        return Redirect::back();
           
     }

     public function newAppointment(){
         return view('addapointment');
     }
     
     public function nextAppointment(Request $request){
         //appointment is checked
        Appointment::where('id', $request->id)
       ->update([
           'checked' => 1
        ]);
         
        switch ($request->input('action')) {
            case 'save':
                if($request->date == NULL){
                    return redirect()->back()->with('msg','Date and time is not set properly..!');
                }
                //google calender date & time format
                $date = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');
                $time12=$request->time;
                $time24  = date("H:i", strtotime( $time12 ));
                
                //saving date to db
                $appointment=new Appointment;
                $appointment->name= $request->name;
                $appointment->phone= $request->phone;
                $appointment->email= $request->email;
                $appointment->gender= $request->gender;
                $appointment->date= $date;
                $appointment->time= $time24;
                $appointment->save();

                //google calender settings
                $startTime=Carbon::parse($date.' '.$time24.'Asia/Dhaka');
                $endTime=(clone $startTime)->addHour();
                $event = new Event;
                $event->name = 'Appointment: '.$request->name;
                $event->startDateTime = $startTime;
                $event->endDateTime =  $endTime;
                $event->save();
                //generating data for email
                $data = [
                    'name' => $request->name,
                    'date' => $request->date,
                    'time' => $request->time,
                ];
                Mail::to($request->email)->send(new NextAppointmentMail($data));
        

                break;
    
            case 'finish':
                    $data = [
                                'name' => $request->name,
                            ];
                    Mail::to($request->email)->send(new ThanksMail($data));
                        
                break;
        }
        
        return redirect()->route('home');
     }

     public function bookAppointmentManually(Request $request){
       //google calender date & time format
       $date = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');
       $time12=$request->time;
       $time24  = date("H:i", strtotime( $time12 ));

        //saving date to db
        $appointment=new Appointment;
        $appointment->name= $request->name;
        $appointment->phone= $request->phone;
        $appointment->email= $request->email;
        $appointment->gender= $request->gender;
        $appointment->date= $date;
        $appointment->time= $time24;
        $appointment->save();

        

           
        //google calender settings
        $startTime=Carbon::parse($date.' '.$time24.'Asia/Dhaka');
        $endTime=(clone $startTime)->addHour();
        $event = new Event;
        $event->name = 'Appointment: '.$request->name;
        $event->startDateTime = $startTime;
        $event->endDateTime =  $endTime;
        $event->save();

        return redirect()->route('appointments')->with('msg','Appointment saved successfully...!');
            
        
        
    }

     public function schedule(){

        $today=Appointment::where(['date' => Carbon::now('Asia/Dhaka')->addDay(0)->format('Y-m-d')])
        ->whereNull('checked')
        ->get();

        $tomorrow= Appointment::where(['date' => Carbon::now('Asia/Dhaka')->addDay(1)->format('Y-m-d')])
        ->whereNull('checked')
        ->get();

        $dayaftertom= Appointment::where(['date' => Carbon::now('Asia/Dhaka')->addDay(2)->format('Y-m-d')])
        ->whereNull('checked')
        ->get();

        return view('schedule')->with('today',$today)->with('tomorrow',$tomorrow )->with('dayaftertom',$dayaftertom );
      
    }
}
