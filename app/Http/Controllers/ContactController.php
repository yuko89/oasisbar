<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;

class ContactController extends Controller
{
    public function send_mail(Request $request){
        $data = $request->all();
        $mail_to = "yuuuuuko89@gmail.com";
Mail::to($mail_to)->send( new ContactNotification($data) );
    }
}
