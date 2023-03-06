<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactcontroller extends Controller
{
   public function showcontact() {
    $myContact=new contact;
    $msg=$myContact->getmessage();
    return view('contact',["message"=> $msg]);
   }
}
