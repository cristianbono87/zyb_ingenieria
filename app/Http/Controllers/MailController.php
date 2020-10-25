<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
    public function store(Request $request)
    {
        Mail::send('emails\message-received', $request->all(), function($msj)
        {
            $msj->subject('correo de contacto');
            $msj->to('cristianbono87@gmail.com');
        });

        return view('zyb');
    }
}
