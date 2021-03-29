<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Post;
use App\Lead;

class HomeController extends Controller
{

    public function index()
    {
        return view('guests.home');
    }

    public function contatti(){
        return view('guests.contatti');
    }

    public function sentcontatti(Request $request){
        $data = $request->all();
        
        $newLead = new Lead();
        $newLead->fill($data);
        $newLead->save();
        Mail::to('cippa.italy@hotmail.it')->send(new SendMail());

        return redirect()->route('guests.contatti')->with('status' , 'messaggio inviato');
        
    }
}

