<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details=[
            'title'=>'Mail from avisha',
            'body'=>'Testing purpose'

        ];
        Mail::to("forsendingemails814@gmail.com")->send(new TestMail($details));
        return "E-mail sent";
    }
}
