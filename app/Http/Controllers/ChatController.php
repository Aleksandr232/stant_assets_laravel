<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
        ]);

        $message = new Message();
        $message->user_id = Auth::id();
        $message->message = $request->input('message');
        $message->save();

        broadcast(new MessageSent($message, $user));

        return response()->json(['message' => 'Message sent successfully']);
    }

    public function getMessages()
    {
        $messages = Message::with('user')->orderBy('created_at', 'desc')->get();

        return response()->json($messages);
    }

    public function getUsers()
    {
        $users = Auth::user()->allUsers();

        return response()->json($users);
    }
}
