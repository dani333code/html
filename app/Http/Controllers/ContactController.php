<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function send(Request $request)
    { 
        $name = $request->name;
        $email = $request->email;
        $problem = $request->problem;
        
        Mail::to(request('earnpointe'))
        ->send(new ContactMail($name, $email, $problem));

        return redirect('/');
    }

}
