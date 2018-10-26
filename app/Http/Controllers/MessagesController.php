<?php

// This class belongs in the coontroller sa app.http.controller
namespace App\Http\Controllers;

//basically mo handle syag request
use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){

        $this->validate($request, [

            'name' => 'required',
            'email' => 'required'


        ]);
// Create new message
            $message = new Message;
            $message->name = $request->input('name');
            $message->email = $request->input('email');
            $message->message = $request->input('message');
// Save message

            $message->save();
            // Redirect

            return redirect('/')->with('success', 'Message Sent');
    }


    public function getMessages(){

        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }
}
