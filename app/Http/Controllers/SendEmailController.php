<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use App\Mail\NotifyMail;
use Illuminate\Http\Request;

use Mail;



class SendEmailController extends Controller
{
    public function index()
    {
         $data = [
      "subject"=>"Tutorial Mail",
      "body"=>"Hello friends, Welcome to Metrowired Tutorial Mail Delivery!"
      ];
    // MailNotify class that is extend from Mailable class.
    try
    {
      Mail::to('lebogang@saatplay.com')->send(new MailNotify($data));
      return response()->json(['Great! Successfully send in your mail']);
    }
    catch(Exception $e)
    {
      return response()->json(['Sorry! Please try again latter']);
    }
    }
}
