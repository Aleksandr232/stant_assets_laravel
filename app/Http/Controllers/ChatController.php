<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;
use App\Events\MessageSent;

class ChatController extends Controller
{


    public function sendMessage(Request $request, $recipientId)
    {
        $this->validate($request, [
            'message' => 'required',
        ]);

        $message = new Message(); // Create a new instance of the Message model
        $message->user_id = $recipientId;
        $message->message = $request->input('message');
        $message->save(); // Save the message to the database

        $user = Auth::user();
        broadcast(new MessageSent($message, $user, $recipientId))->toOthers();

        return response()->json(['message' => 'Message sent successfully']);
    }

    public function getAllUsers()
    {
        $users = User::all();
        return response()->json($users);
    }


}
