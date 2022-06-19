<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mycontact;



class Contact extends Controller
{
    public function contactform(Request $req ){
      $data= new Mycontact;
      $data->name=$req->name;
      $data->email=$req->email;
      $data->subject=$req->subject;
      $data->message=$req->message;
      $res=$data->save();
      if($res){
        return back()->with("success","ranjan will contact u soon...");
      }
      else{
        return back()->with("error","some error have comes..");
      }





    }
}
