<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;



class SendEmailController extends Controller
{
    function index()
    {
     return view('pages.index');
    }

    function send(Request $request)
    {

        $data = array(
            'name'      =>  $request->name,
            'phonenumber'=> $request->phonenumber,
            'email'=> $request->email,
            'location'=> $request->location,
            'message'   =>   $request->message
        );


     Mail::to('info@oaksandpines.co.ke')->send(new SendMail($data));
     return back()->with('success', 'Thank you for contacting us! We will get back to you as soon as possible.');

    }
}
