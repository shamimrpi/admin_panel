<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
   
    public function invoice(){
        
        return view('admin.order.invoice');
    }
}
