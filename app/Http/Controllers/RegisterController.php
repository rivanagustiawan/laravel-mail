<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function store(Request $request){
        Mail::to($request->email)->send(new OrderShipped($request));
    }
}
