<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function send(Request $request){
        Message::create(['title' => $request->title, 'text' => $request->text]);
    }

    public function load(Request $request){
        $context = Message::latest()->get();
        return json_encode($context);
    }
}
