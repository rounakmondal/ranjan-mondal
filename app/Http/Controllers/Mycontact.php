<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mycontact;



class Mycontact extends Controller
{
    public function contactform(Request $req ){
        dd($req->all());




    }
}
