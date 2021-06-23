<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function index()
    {
        $starting_hour = Setting::where('settings_name','starting_hour')->first();
        $office_duration = Setting::where('settings_name','office_duration')->first();

        return view('settings.settings')->with('starting_hour',$starting_hour->settings_value)
                                        ->with('office_duration',$office_duration->settings_value);
    }

    public function update(Request $request){

        Setting::where('settings_name', 'starting_hour')
        ->update([
            'settings_value' => $request->starting_hour
         ]);

         Setting::where('settings_name', 'office_duration')
        ->update([
            'settings_value' => $request->office_duration
         ]);
        
        return redirect()->back()->with('msg','Settings Updated successfully...!');
    }
}
