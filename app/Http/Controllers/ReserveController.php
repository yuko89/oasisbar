<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReserveNotification;
use Illuminate\Support\Facades\Log;

class ReserveController extends Controller
{
    public function send_mail(Request $request){
        Log::debug($request);
        $data = $request->all();
        $mail_to = "yuuuuuko89@gmail.com";
        Mail::to($mail_to)->send( new ReserveNotification($data) );
        return redirect('/');
    }
}
