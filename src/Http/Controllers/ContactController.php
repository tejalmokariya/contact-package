<?php

namespace mydata\contact\Http\Controllers;
                                                                    
use Illuminate\Http\Request;

use  App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use mydata\contact\Mail\ContactMailable;
use mydata\contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
       Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
       Contact::create($request->all());
       return redirect(route('contact'));

    }
}
