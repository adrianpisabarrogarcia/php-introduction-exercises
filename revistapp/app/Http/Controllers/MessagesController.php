<?php

namespace App\Http\Controllers;

use Illuminate\Mail\Mailable;
use App\Mail\MessageReceived;

use Illuminate\Support\Facades\Mail;

//use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(/* Request $reques */){
        //return $request;
        //return $request->get('name');
        //return request('email');
        $message = request()->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'content' => 'required|min:3'

        ], [
            'name.required' => __('I need your name')


        ]);

        //enviar emails
        //Mail::to('apisabarro@sanviatorpastoral.es')->send(new MessageReceived($message));
/*        Mail::to('apisabarro@sanviatorpastoral.es')->queue(new MessageReceived($message));*/

        return new MessageReceived($message);
        return "Mensaje enviado";


    }
}
