<?php

namespace App\Services\Mail;

use Exception;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Mail;

class SendMail
{
    public static function send($message,$email){
        $data = [
            'subject'=>'Mohamed',
            'body'=>$message
        ];
        try
        {
            Mail::to($email)->send(new MailNotify($data));
            return response()->json(['great']);
        }catch(Exception $th)
        {
            return response()->json(['false']);

        }
    }
}