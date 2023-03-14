<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function contact_us(){
        return view('contact_us');
    }

    public function contact_us_submit(Request $request){    
        $name = $request->input('name');
        $email = $request->email;
        $message = $request->message;
        $user_data = compact('name','email','message');
                    
        Mail::to($email)->send(new ContactMail($user_data));
        return redirect(route('homepage'))->with('status','Email inviata con successo!');
        }
}
