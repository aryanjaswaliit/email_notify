<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\mailsend;
class sendme extends Controller
{
    public function send_email(Request $lol){
        
        $data["subject"] = $lol["subject"];
        $data["body"] = $lol["body"];
        if ($data["subject"] == Null || $data["body"]  == Null){
            echo "misss";
        }else{
        try{
        
        
            Mail::to('aryanjaswaliit@gmail.com')->send(new mailsend($data));
            return response()->json(['great']);
        }catch(Exception $th){
            return response()->json(['great error']);
        }
    }
    }
}
