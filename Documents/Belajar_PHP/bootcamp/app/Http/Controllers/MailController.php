<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendMail;

class MailController extends Controller
{
    //
    public function sendMail(Request $request){
        Mail::to('reynard.satria@gmail.com')->send(new SendMail($request));

        return 'mail has been sent';
    }
}
