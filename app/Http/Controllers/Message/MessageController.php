<?php

namespace App\Http\Controllers\Message;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{

    public function showMessageForm($id)
    {

        return view('dashboard.message.sendmessage', [
            'id' => $id,
        ]);

    }

    public function sendMessage(MessageRequest $request)
    {

        Message::create([
            'sender_id'    => auth()->user()->id,
            'recipient_id' => $request->recipient_id,
            'message'      => $request->message,
        ]);
    }

    public function getMessage(){
        return view('dashboard.message.receivemessage', [
            'messages' => Message::where('recipient_id', auth()->user()->id)->paginate(10),
        ]);


    }


}
