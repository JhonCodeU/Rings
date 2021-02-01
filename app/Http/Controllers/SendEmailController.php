<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('contact.sendEmail');
    }

    
    function store(Request $request)
    {
        $this->validate($request, [
        'name'     =>  'required',
        'email'  =>  'required|email',
        'message' =>  'required'
        ]);
        
        $email = new SendMail($request->all());
        
        Mail::to("jhondeiber3030@gmail.com")->send($email);

        //return "Gracias por enviar el mensaje";
        return back()->with('success', 'Thanks for contacting us!');

    }
}
