<?php

namespace App\Http\Controllers;
use App\Models\Invite;
use App\Models\User;
use App\Mail\InviteMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class InviteController extends Controller
{
    public function invite()
    {
        // show the user a form with an email field to invite a new user
        return view('invite');
    }
    
    public function process(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email'
        ]);
        $validator->after(function ($validator) use ($request) {
            if (Invite::where('email', $request->input('email'))->exists()) {
                $validator->errors()->add('email', 'There exists an invite with this email!');
            }
        });
        if ($validator->fails()) {
            return redirect(route('invite'))
                ->withErrors($validator)
                ->withInput();
        }

         // validate the incoming request data
    
         do {
            //generate a random string using Laravel's str_random helper
            $token = Str::random(20);
        } //check if the token already exists and if it does, try again
        while (Invite::where('token', $token)->first());

             //create a new invite record
            $invite = Invite::create([
                'email' => $request->get('email'),
                'token' => $token
            ]);
            // send the email
        Mail::to($request->get('email'))->send(new InviteMail($invite));
    
        // redirect back where we came from
        return redirect(route('home'));
        
    }
    
    public function accept($token)
{
    // Look up the invite
    if (!$invite = Invite::where('token', $token)->first()) {
        //if the invite doesn't exist do something more graceful than this
        abort(404);
    }else{
        $data=[
            'email'=> $invite->email,
            'token'=> $token,
        ];
        return view('InvitedUserRegistration')->with('data',$data);
    }

}
        public function InvitedUserCreate(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user= User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password,),
            ]);
            if($user){
                $invite = Invite::where('token', $request->token)->first();
                $invite->delete();
                return redirect(route('login'));
            }else{
                return 'something went wrong';
            }
        }
}
