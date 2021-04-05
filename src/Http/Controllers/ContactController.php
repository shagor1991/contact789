<?php

namespace Shagor\ContactA2Z\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Shagor\ContactA2Z\Mail\ContactMail;
use Shagor\ContactA2Z\Models\Contact;

class ContactController extends Controller
{
    public function contact(){
        return view('contacta2z::contact');
    }

    public function submit(Request $request){

        Contact::create($request->all());
        

        Mail::to(config('contact.email_to'))->send(new ContactMail($request));

        return redirect('/contact');
    }
}
