<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomemail;

class mailController extends Controller
{
    public function emailsend()
    {
        $to = "rohitmehta58620@gmail.com";
        $msg = "Hii Rohit KUmar
        Welcome To Our company";
        $subject = "WelCome";

        Mail::to($to)->send(new welcomemail($msg, $subject));
        return "thanks";
    }
}
