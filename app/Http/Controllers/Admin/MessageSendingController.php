<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class MessageSendingController extends Controller
{
    
    public function smsSending(){
        $customers = Customer::where('status','a')->get();
       return view('admin.sms_sending.sms',compact('customers'));
    }

    public function sms(){
        return view('admin.sms_sending.message');
    }
}
